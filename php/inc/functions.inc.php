<?php

function getHashtag($categoryName) {
  $hashCategory = '#'.str_replace(' ', '', $categoryName);
  return $hashCategory;
}

?>