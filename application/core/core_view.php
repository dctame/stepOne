<?php
class core_view
{
    public function generate($template, $page, $Gold)
    {
        $template = $this->getContens($template);
        echo $this->replace($page, $template, $Gold);
    }


    public function replace ($page, $template, $Gold)
    {
        $search = array
        (
            "%%__page__%%" => $this->getContens($page),
           // "%%__gold__%%" => core_menuLoader::getMenu(),
        );

        return str_replace(array_flip($search), $search, $template);
    }

    private function getContens($file)
    {
        return file_get_contents('application/html/' . $file);
    }

}
