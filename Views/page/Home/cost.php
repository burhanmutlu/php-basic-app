
<p class="fs-1 table-list-info">Tahmini Maliyet</p>

<table class='table table-striped table-hover' id="table-list">
    <thead>
        <th>Malzeme</th>
        <th>Fiyat</th>
        <th>Tutar</th>
    </thead>
    <tbody id='tbl_body2'>

    </tbody>  
    <tr id='tr_toplam2' >
        <td></td>
        <td></td>
        <td id='tbl_toplam2'>Toplam: 0</td>
    <tr>
</table>

<script>
  function getTp(tp2) {
    document.getElementById("tp2").innerHTML = tp2;
    document.getElementById("toplam").innerHTML = (tp2 * <?php echo $JSON['USD']['satis']; ?>).toFixed(2);
  }
</script>

<p class="needs-list">
    İşbu. Teklifde günlük <span style="color: #878787;font-weight: 400;">
    <?php echo $JSON['USD']['satis']; ?></span>
     TL x <span style="color: blue;font-weight: 400;" id="tp2"> </span> =
     <span style="font-weight: 600;" id="toplam"> </span> TL.  
    Bu fiyatlara işçilik masrafı dahil değildir. 
</p>



<hr>