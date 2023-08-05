<?php
    namespace HTML;
    class Table{
        public $title = "";
        public $numRows = 0;
        public function message() {
            echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
        }
    }

    $table = new Table();
    $table->title = "My table";
    $table->numRows = 5;
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $table->message();
        ?>
    </body>
</html>