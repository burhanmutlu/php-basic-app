<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%; position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/tunelyazilim/">Tünel Yazılım</Table></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tunelyazilim">Ana Sayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tunelyazilim/siparisler">Siparişler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tunelyazilim/urun-ekle">Ürün Ekle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tunelyazilim/musteri-ekle">Müşteri Ekle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tunelyazilim/musteriler">Müşteriler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tunelyazilim/urunler">Ürünler</a>
        </li>     
        
        <?php
          $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
        ?>
        <li class="nav-item" style="float: right;">
          <span class="nav-link">
            1 USD($): <?php echo $JSON['USD']['satis']; ?> TL(₺)
          </span>
        </li>

        <li class="nav-item" style="padding-top: 7px;">
          <button onclick="ChangeMode()" id="mod" style="background: none;color: white; border:none;"> 
            <i class="bi bi-moon-fill"></i>
          </button>
        </li>

        
      </ul>
    </div>
  </div>
</nav>