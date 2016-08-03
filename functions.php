<?php

    function svg($file, $class = null) {
        $class = ($class !== null ? "icon-$class" : null);
        print "<i class='icon $class'>".file_get_contents($file)."</i>";
    }

?>