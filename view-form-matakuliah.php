<html>

<head>
    <tittle></tittle>
<head>

<body>
    <center>
        <form    action="<?=    base_url('matakuliah/cetak');     ?>"
method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form input data mata kuliah
                </th>
            </tr>
            <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <th>kode MTK</th>
            <th>:</th>
            <td>
                <input type="text" name="kode" id="kode">
            </td>
        </tr>
        <?= form_error('kode'); ?>
        <tr>
            <th>nama MTK</th>
            <td>:</td>
            <td>
                <input type="text" name="nama" id="nama">
            <td>
        </tr>
        <?= form_error('nama'); ?>
        <tr>
            <th>sks</th>
            <td>:</td>
            <td>
                <select name="sks" id="sks">
                    <option value"">pilih sks</option>
                    <option value"2">2</option>
                    <option value"3">3</option>
                    <option value"4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <th colspan="3" align="center">
                <input type="submit" value="submit">
            </td>
        </tr>
    </table>
</form>
</center>
</body>

</html>