<?php

$this->data['header'] = $this->t('{attributequeryconsumer:attributequeryconsumer:link_panel}');
$this->data['head'] = '<link rel="stylesheet" href="resources/attributequeryconsumer.css" type="text/css">';

$this->includeAtTemplateBase('includes/header.php');

if(isset($this->data['userMessage'])){ ?>
        <div class="umesg"><?php echo $this->t($this->data['userMessage']); ?></div>
<?php }?>

<h1> <?php echo $this->t('{attributequeryconsumer:attributequeryconsumer:link_panel}') ?> </h1>

<ul>
<?php
        foreach ($this->data['links'] AS $link) {
                echo '<li><a href="' . htmlspecialchars($link['href']) . '">' . $this->t($link['text']) . '</a>';
                if(isset($link['extra_text'])) {
                        echo $link['extra_text'];
                }
                echo '</li>';
        }
?>
</ul>

<?php
$this->includeAtTemplateBase('includes/footer.php');
?>

