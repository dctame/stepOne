<?php
class core_view
{
    public function generate($template, $page)
    {
        $template = $this->getContens($template);
        echo $this->replace($page, $template);
    }


    public function replace ($page, $template)
    {
        $search = array
        (
            "%%__page__%%" => $this->getContens($page),
           // "%%__menu__%%" => core_menuLoader::getMenu(),
        );

        return str_replace(array_flip($search), $search, $template);
    }

    private function getContens($file)
    {
        return file_get_contents('application/html/' . $file);
    }

}
