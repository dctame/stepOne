<?php
class game_view extends core_view
{
    public function generate($template, $page, $gold)
    {

        $template = $this->getContens($template);
        echo $this->replace($page, $template, $gold);
    }


    public function replace ($page, $template, $gold)
    {
        $search = array
        (
            "%%__page__%%" => $this->getContens($page),
            "%%__gold__%%" => $gold,
        );

        return str_replace(array_flip($search), $search, $template);
    }

    private function getContens($file)
    {
        return file_get_contents('application/html/' . $file);
    }

}
