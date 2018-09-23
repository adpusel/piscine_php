<?PHP  include "ad_src.php"; 

$tab_0 = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
$tab_1 = [0, 1, 2, 4, 5, 7];
$tab_2 = [7, 6, 5, 4, 2, 1, 0];
$tab_3 = ["0", 0, 2, 8, 2, 7, 9];
$tab_4 = ['a', 2, "b", 2, 7, 9];

echo ft_is_sort($tab_0) . "\n";
echo ft_is_sort($tab_1) . "\n";
echo ft_is_sort($tab_2) . "\n";
echo ft_is_sort($tab_3) . "\n";
echo ft_is_sort($tab_4) . "\n";

$tab_0[] = "Et qu’est-ce qu’on fait maintenant ?";
echo ft_is_sort($tab_0) . "\n";