<?php

function getQuote() {
    return "<blockquote style='font-style: italic; color: #666;'>“Code is like humor. When you have to explain it, it’s bad.” – Cory House</blockquote>";
}

function getLanguages() {
    $langs = ["PHP", "JavaScript", "HTML", "CSS"];
    $output = "<ul>";
    foreach ($langs as $lang) {
        $output .= "<li>✅ $lang</li>";
    }
    $output .= "</ul>";
    return $output;
}
?>
