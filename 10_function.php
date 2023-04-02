<?php
function showTable($txt) {
    echo "<table border='1' cellspacing='0' cellpadding='5'>
    <tr>
        <td>no</td>
        <td>nama</td>
        <td>NPM</td>
    </tr>
    <tr>
        <td>1</td>
        <td>$txt</td>
        <td>123</td>
    </tr>
    <tr>
        <td>2</td>
        <td>doni</td>
        <td>456</td>
    </tr>
    <tr>
        <td>3</td>
        <td>fauzan</td>
        <td>101</td>
    </tr>
</table>";
}

showTable("wahyu");
?>