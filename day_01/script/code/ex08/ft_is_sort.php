#!/usr/bin/php
<?php

function ft_is_sort($tab)
{
  $sorted = $tab;
  sort($sorted);
  if ($sorted === $tab) {
	return 1;
  }
  rsort($sorted);
  if ($sorted === $tab) {
	return 1;
  }
  return 0;
}
