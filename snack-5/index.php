<?php
//Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$testo='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in augue eu sapien rutrum vulputate a sed lectus. Maecenas vehicula, massa at sollicitudin vestibulum, lorem dolor aliquam orci, sed feugiat nibh ex porttitor arcu. Cras accumsan ipsum suscipit elit venenatis, sit amet hendrerit purus malesuada. Quisque faucibus dapibus nisl, ut vehicula magna fringilla eget. Curabitur tincidunt mauris vitae ex mattis, in varius libero egestas. Morbi at fringilla massa. Suspendisse potenti.';
$paragrafo=explode('.', $testo);
var_dump($paragrafo);




?>