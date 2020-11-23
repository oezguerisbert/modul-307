<?php

/**
 * Crates a Bootstrap-Card
 * 
 * @param string $imageLink
 * @param string $title
 * @param string $description
 * 
 * @return string precreated card as html
 */
function createCard(string $imageLink, string $title, string $description = "", string $buttonText = "Open"){
    return htmlspecialchars("<div class=\"card\" style=\"width: 18rem;\">
    <img src=\"$imageLink\" class=\"card-img-top\" alt=\"...\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">$title</h5>
      <p class=\"card-text\">$description</p>
      <a href=\"#\" class=\"btn btn-primary\">$buttonText</a>
    </div>
  </div>");
}

?>