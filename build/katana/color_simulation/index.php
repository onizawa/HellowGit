<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>カラーシミュレーション - KATANA ZIRCONIA MATERIALS - Kuraray Dental</title>
  <link rel="stylesheet" href="/katana/common/css/common.css">
  <link rel="stylesheet" href="/katana/common/css/color_simulation.css">
</head>
<body>
  <?php
    include('../header.php');
  ?>

  <main class="main page">
    <h1 class="headline">カラーシミュレーション</h1>
    <div class="content">
      <div class="content__inner">
        <section class="section section--color">
          <h2 class="section__headline">支台歯色調の選択</h2>
          <div class="section__inner">
            <ul class="selectList selectList--color">
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="Light Color" data-color="light">
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_color_light.jpg" alt="Light Color"></div>
                  <div class="selectList__name">Light Color</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="Medium Color" data-color="medium">
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_color_medium.jpg" alt="Medium Color"></div>
                  <div class="selectList__name">Medium Color</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="Dark Color" data-color="dark">
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_color_dark.jpg" alt="Dark Color"></div>
                  <div class="selectList__name">Dark Color</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="Metal Color" data-color="metal">
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_color_metal.jpg" alt="Metal Color"></div>
                  <div class="selectList__name">Metal Color</div>
                </label>
              </li>
            </ul>
          </div>
        </section>
        <section class="section section--shade">
          <h2 class="section__headline">目標シェードの選択</h2>
          <div class="section__inner">
            <div class="selectBox">
              <h3 class="selectBox__headline">A Shade</h3>
              <div class="selectBox__inner">
                <ul class="selectList selectList--shade">
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="A1" data-arr='["dark","light","medium","metal"]' data-shade="a1">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_a1.jpg" alt="A1"></div>
                      <div class="selectList__name">A<sub>1</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="A2" data-arr='["dark","light","medium","metal"]' data-shade="a2">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_a2.jpg" alt="A2"></div>
                      <div class="selectList__name">A<sub>2</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="A3" data-arr='["dark","light","medium","metal"]' data-shade="a3">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_a3.jpg" alt="A3"></div>
                      <div class="selectList__name">A<sub>3</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="A3.5" data-arr='["dark","light","medium","metal"]' data-shade="a3.5">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_a3-5.jpg" alt="A3.5"></div>
                      <div class="selectList__name">A<sub>3.5</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="A4" data-arr='["dark","light","medium","metal"]' data-shade="a4">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_a4.jpg" alt="A4"></div>
                      <div class="selectList__name">A<sub>4</sub></div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="selectBox">
              <h3 class="selectBox__headline">B Shade</h3>
              <div class="selectBox__inner">
                <ul class="selectList selectList--shade">
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="B1" data-arr='["dark","light","medium","metal"]' data-shade="b1">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_b1.jpg" alt="B1"></div>
                      <div class="selectList__name">B<sub>1</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="B2" data-arr='["dark","light","medium","metal"]' data-shade="b2">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_b2.jpg" alt="B2"></div>
                      <div class="selectList__name">B<sub>2</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="B3" data-arr='["dark","light","medium","metal"]' data-shade="b3">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_b3.jpg" alt="B3"></div>
                      <div class="selectList__name">B<sub>3</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="B4" data-arr='["dark","light","medium","metal"]' data-shade="b4">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_b4.jpg" alt="B4"></div>
                      <div class="selectList__name">B<sub>4</sub></div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="selectBox">
              <h3 class="selectBox__headline">C Shade</h3>
              <div class="selectBox__inner">
                <ul class="selectList selectList--shade">
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="C1" data-arr='["dark","light","medium","metal"]' data-shade="c1">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_c1.jpg" alt="C1"></div>
                      <div class="selectList__name">C<sub>1</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="C2" data-arr='["dark","light","medium","metal"]' data-shade="c2">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_c2.jpg" alt="C2"></div>
                      <div class="selectList__name">C<sub>2</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="C3" data-arr='["dark","light","medium","metal"]' data-shade="c3">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_c3.jpg" alt="C3"></div>
                      <div class="selectList__name">C<sub>3</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="C4" data-arr='["dark","light","medium","metal"]' data-shade="c4">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_c4.jpg" alt="C4"></div>
                      <div class="selectList__name">C<sub>4</sub></div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="selectBox">
              <h3 class="selectBox__headline">D Shade</h3>
              <div class="selectBox__inner">
                <ul class="selectList selectList--shade">
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="D2" data-arr='["dark","light","medium","metal"]' data-shade="d2">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_d2.jpg" alt="D2"></div>
                      <div class="selectList__name">D<sub>2</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="D3" data-arr='["dark","light","medium","metal"]' data-shade="d3">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_d3.jpg" alt="D3"></div>
                      <div class="selectList__name">D<sub>3</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="D4" data-arr='["dark","light","medium","metal"]' data-shade="d4">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_d4.jpg" alt="D4"></div>
                      <div class="selectList__name">D<sub>4</sub></div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="selectBox">
              <h3 class="selectBox__headline">NP Shade(NP1.5, NP2.5)</h3>
              <div class="selectBox__inner">
                <ul class="selectList selectList--shade">
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="NP1.5" data-arr='["dark","light","medium","metal"]' data-shade="np1.5">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_np1-5.jpg" alt="NP1.5"></div>
                      <div class="selectList__name">NP<sub>1.5</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="NP2.5" data-arr='["dark","light","medium","metal"]' data-shade="np2.5">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_np2-5.jpg" alt="NP2.5"></div>
                      <div class="selectList__name">NP<sub>2.5</sub></div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="selectBox">
              <h3 class="selectBox__headline">NW Shade(NW0, NW0.5)</h3>
              <div class="selectBox__inner">
                <ul class="selectList selectList--shade">
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="NW0" data-arr='["dark","light","medium","metal"]' data-shade="nw0">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_nw0.jpg" alt="NW0"></div>
                      <div class="selectList__name">NW<sub>0</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="NW0.5" data-arr='["dark","light","medium","metal"]' data-shade="nw0.5">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_nw0-5.jpg" alt="NW0.5"></div>
                      <div class="selectList__name">NW<sub>0.5</sub></div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="selectBox">
              <h3 class="selectBox__headline">Esthetic White Shade<br>(EW00, EW0, EW, EWY)</h3>
              <div class="selectBox__inner">
                <ul class="selectList selectList--shade">
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="EW00" data-arr='["dark","light","medium","metal"]' data-shade="ew00">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_ew00.jpg" alt="EW00"></div>
                      <div class="selectList__name">EW<sub>00</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="EW0" data-arr='["dark","light","medium","metal"]' data-shade="ew0">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_ew0.jpg" alt="EW0"></div>
                      <div class="selectList__name">EW<sub>0</sub></div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="EW" data-arr='["dark","light","medium","metal"]' data-shade="ew">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_ew.jpg" alt="EW"></div>
                      <div class="selectList__name">EW</div>
                    </label>
                  </li>
                  <li class="selectList__item">
                    <label>
                      <input type="checkbox" class="check" value="EWY" data-arr='["dark","light","medium","metal"]' data-shade="ewy">
                      <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_shade_ewy.jpg" alt="EWY"></div>
                      <div class="selectList__name">EWY</div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="section section--zilconia no--select">
          <h2 class="section__headline">推奨のノリタケ カタナ ジルコニア</h2>
          <div class="section__inner">
            <ul class="selectList selectList--zilconia">
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HT 10" data-zilconia='["light-ew","light-ew0","light-ew00","light-ewy","medium-ew","medium-ew0","medium-ew00","medium-ewy","medium-nw0"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_ht10.jpg" alt="HT 10"></div>
                  <div class="selectList__name">HT 10</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="LT 10" data-zilconia='["dark-ew","dark-ew0","dark-ew00","dark-ewy","dark-nw0","light-ew","light-ew0","light-ew00","light-ewy","medium-ew","medium-ew0","medium-ew00","medium-ewy","medium-nw0"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_lt10.jpg" alt="LT 10"></div>
                  <div class="selectList__name">LT 10</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML A1" data-zilconia='["light-a1","light-np1.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmla1.jpg" alt="UTML A1"></div>
                  <div class="selectList__name">UTML A1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML A2" data-zilconia='["light-a2","light-np2.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmla2.jpg" alt="UTML A2"></div>
                  <div class="selectList__name">UTML A2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML A3" data-zilconia='["light-a3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmla3.jpg" alt="TML A3"></div>
                  <div class="selectList__name">UTML A3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML A3.5" data-zilconia='["light-a3.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmla3-5.jpg" alt="UTML A3.5"></div>
                  <div class="selectList__name">UTML A3.5</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML A4" data-zilconia='["light-a4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmla4.jpg" alt="UTML A4"></div>
                  <div class="selectList__name">UTML A4</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML B1" data-zilconia='["light-b1"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlb1.jpg" alt="UTML B1"></div>
                  <div class="selectList__name">UTML B1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML B2" data-zilconia='["light-b2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlb2.jpg" alt="UTML B2"></div>
                  <div class="selectList__name">UTML B2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML B3" data-zilconia='["light-b3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlb3.jpg" alt="UTML B3"></div>
                  <div class="selectList__name">UTML B3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML B4" data-zilconia='["light-b4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlb4.jpg" alt="UTML B4"></div>
                  <div class="selectList__name">UTML B4</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML C1" data-zilconia='["light-c1"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlc1.jpg" alt="UTML C1"></div>
                  <div class="selectList__name">UTML C1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML C2" data-zilconia='["light-c2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlc2.jpg" alt="UTML C2"></div>
                  <div class="selectList__name">UTML C2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML C3" data-zilconia='["light-c3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlc3.jpg" alt="UTML C3"></div>
                  <div class="selectList__name">UTML C3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML C4" data-zilconia='["light-c4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlc4.jpg" alt="UTML C4"></div>
                  <div class="selectList__name">UTML C4</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML D2" data-zilconia='["light-d2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmld2.jpg" alt="UTML D2"></div>
                  <div class="selectList__name">UTML D2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML D3" data-zilconia='["light-d3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmld3.jpg" alt="UTML D3"></div>
                  <div class="selectList__name">UTML D3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML D4" data-zilconia='["dark-d4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmld4.jpg" alt="UTML D4"></div>
                  <div class="selectList__name">UTML D4</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML EA1" data-zilconia='["light-a1"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlea1.jpg" alt="UTML EA1"></div>
                  <div class="selectList__name">UTML EA1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML EA2" data-zilconia='["light-a2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlea2.jpg" alt="UTML EA2"></div>
                  <div class="selectList__name">UTML EA2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML EA3" data-zilconia='["light-a3","light-a3.5","light-np2.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlea3.jpg" alt="UTML EA3"></div>
                  <div class="selectList__name">UTML EA3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="UTML ENW" data-zilconia='["light-nw0","light-nw0.5]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_utmlenw.jpg" alt="UTML ENW"></div>
                  <div class="selectList__name">UTML ENW</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML NW" data-zilconia='["light-nw0","light-nw0.5","medium-nw0","medium-nw0.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmlnw.jpg" alt="STML NW"></div>
                  <div class="selectList__name">STML NW</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML A1" data-zilconia='["light-a1","light-np1.5","medium-a1","medium-np1.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmla1.jpg" alt="STML A1"></div>
                  <div class="selectList__name">STML A1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML A2" data-zilconia='["light-a2","light-np2.5","medium-a2","medium-np2.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmla2.jpg" alt="STML A2"></div>
                  <div class="selectList__name">STML A2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML A3" data-zilconia='["light-a3","medium-a3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmla3.jpg" alt="STML A3"></div>
                  <div class="selectList__name">STML A3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML A3.5" data-zilconia='["light-a3.5","medium-a3.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmla3-5.jpg" alt="STML A3.5"></div>
                  <div class="selectList__name">STML A3.5</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML A4" data-zilconia='["light-a4","medium-a4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmla4.jpg" alt="STML A4"></div>
                  <div class="selectList__name">STML A4</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML B1" data-zilconia='["light-b1","medium-b1"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmlb1.jpg" alt="STML B1"></div>
                  <div class="selectList__name">STML B1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML B2" data-zilconia='["light-b2","medium-b2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmlb2.jpg" alt="STML B2"></div>
                  <div class="selectList__name">STML B2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML B3" data-zilconia='["light-b3","medium-b3","light-b4","medium-b4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmlb3.jpg" alt="STML B3"></div>
                  <div class="selectList__name">STML B3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML C1" data-zilconia='["light-c1","medium-c1"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmlc1.jpg" alt="STML C1"></div>
                  <div class="selectList__name">STML C1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML C2" data-zilconia='["light-c2","medium-c2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmlc2.jpg" alt="STML C2"></div>
                  <div class="selectList__name">STML C2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML C3" data-zilconia='["light-c3","medium-b3","light-c4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmlc3.jpg" alt="STML C3"></div>
                  <div class="selectList__name">STML C3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML D2" data-zilconia='["light-d2","medium-b2","light-d4","medium-b4]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmld2.jpg" alt="STML D2"></div>
                  <div class="selectList__name">STML D2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="STML D3" data-zilconia='["light-d3","medium-b3]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_stmld3.jpg" alt="STML D3"></div>
                  <div class="selectList__name">STML D3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML NW" data-zilconia='["dark-a1","dark-b1","dark-nw0.5","dark-np1.5","dark-c1","light-ewy","light-nw0","light-nw0.5","medium-ewy","medium-nw0","medium-nw0.5","metal-a1","metal-b1","metal-c1","metal-np1.5","metal-d2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmlnw.jpg" alt="HTML NW"></div>
                  <div class="selectList__name">HTML NW</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML A1" data-zilconia='["light-a1","light-np1.5","medium-a1","medium-np1.5","dark-a2","metail-np2.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmla1.jpg" alt="HTML A1"></div>
                  <div class="selectList__name">HTML A1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML A2" data-zilconia='["dark-np2.5","dark-a3","light-a2","light-np2.5","medium-a2","medium-np2.5","metail-a3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmla2.jpg" alt="HTML A2"></div>
                  <div class="selectList__name">HTML A2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML A3" data-zilconia='["light-a3","medium-a3","metal-a3.5"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmla3.jpg" alt="HTML A3"></div>
                  <div class="selectList__name">HTML A3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML A3.5" data-zilconia='["dark-a3.5","light-a3.5","medium-a3.5","metal-a4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmla3-5.jpg" alt="HTML A3.5"></div>
                  <div class="selectList__name">HTML A3.5</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML A4" data-zilconia='["dark-a4","light-a4","medium-a4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmla4.jpg" alt="HTML A4"></div>
                  <div class="selectList__name">HTML A4</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML B1" data-zilconia='["dark-b2","light-b1","medium-b1","metal-b2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmlb1.jpg" alt="HTML B1"></div>
                  <div class="selectList__name">HTML B1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML B2" data-zilconia='["dark-b3","light-b2","medium-b2","metal-b3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmlb2.jpg" alt="HTML B2"></div>
                  <div class="selectList__name">HTML B2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML B3" data-zilconia='["dark-b4","light-b3","light-b4","medium-b3","medium-b4","metal-b4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmlb3.jpg" alt="HTML B3"></div>
                  <div class="selectList__name">HTML B3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML C1" data-zilconia='["dark-c2","light-c1","medium-c1","metal-c2"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmlc1.jpg" alt="HTML C1"></div>
                  <div class="selectList__name">HTML C1</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML C2" data-zilconia='["dark-c3","light-c2","medium-c2","metal-c3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmlc2.jpg" alt="HTML C2"></div>
                  <div class="selectList__name">HTML C2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML C3" data-zilconia='["dark-c4","light-c3","light-c4","medium-c3","medium-c4","metal-c4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmlc3.jpg" alt="HTML C3"></div>
                  <div class="selectList__name">HTML C3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML D2" data-zilconia='["dark-d2","dark-d3","light-d2","medium-d2","metal-d3"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmld2.jpg" alt="HTML D2"></div>
                  <div class="selectList__name">HTML D2</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HTML D3" data-zilconia='["dark-d4","light-d3","light-d4","medium-d3","medium-d4","metal-d4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_htmld3.jpg" alt="HTML D3"></div>
                  <div class="selectList__name">HTML D3</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="HT 10+CZR" data-zilconia='["dark-ew00","dark-ew0","dark-ew","dark-ewy","dark-nw0","dark-nw0.5","dark-a1","dark-np1.5","dark-a2","dark-np2.5","dark-a3","dark-a3.5","dark-a4","dark-b1","dark-b2","dark-b3","dark-b4","dark-c1","dark-c2","dark-c3","dark-c4","dark-d2","dark-d3","dark-d4","light-ew00","light-ew0","light-ew","light-ewy","light-nw0","light-nw0.5","light-a1","light-np1.5","light-a2","light-np2.5","light-a3","light-a3.5","light-a4","light-b1","light-b2","light-b3","light-b4","light-c1","light-c2","light-c3","light-c4","light-d2","light-d3","light-d4","medium-ew00","medium-ew0","medium-ew","medium-ewy","medium-nw0","medium-nw0.5","medium-a1","medium-np1.5","medium-a2","medium-np2.5","medium-a3","medium-a3.5","medium-a4","medium-b1","medium-b2","medium-b3","medium-b4","medium-c1","medium-c2","medium-c3","medium-c4","medium-d2","medium-d3","medium-d4","metal-ew00","metal-ew0","metal-ew","metal-ewy","metal-nw0","metal-nw0.5","metal-a1","metal-np1.5","metal-a2","metal-np2.5","metal-a3","metal-a3.5","metal-a4","metal-b1","metal-b2","metal-b3","metal-b4","metal-c1","metal-c2","metal-c3","metal-c4","metal-d2","metal-d3","metal-d4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_katana.jpg" alt="HT 10+CZR"></div>
                  <div class="selectList__name">HT 10+CZR</div>
                </label>
              </li>
              <li class="selectList__item">
                <label>
                  <input type="checkbox" class="check" value="LT 10+CZR" data-zilconia='["dark-ew00","dark-ew0","dark-ew","dark-ewy","dark-nw0","dark-nw0.5","dark-a1","dark-np1.5","dark-a2","dark-np2.5","dark-a3","dark-a3.5","dark-a4","dark-b1","dark-b2","dark-b3","dark-b4","dark-c1","dark-c2","dark-c4","dark-d2","dark-d3","dark-d4","light-ew00","light-ew0","light-ew","light-ewy","light-nw0","light-nw0.5","light-a1","light-np1.5","light-a2","light-np2.5","light-a3","light-a3.5","light-a4","light-b1","light-b2","light-b3","light-b4","light-c1","light-c2","light-c4","light-d2","light-d3","light-d4","medium-ew00","medium-ew0","medium-ew","medium-ewy","medium-nw0","medium-nw0.5","medium-a1","medium-np1.5","medium-a2","medium-np2.5","medium-a3","medium-a3.5","medium-a4","medium-b1","medium-b2","medium-b3","medium-b4","medium-c1","medium-c2","medium-c4","medium-d2","medium-d3","medium-d4","metal-ew00","metal-ew0","metal-ew","metal-ewy","metal-nw0","metal-nw0.5","metal-a1","metal-np1.5","metal-a2","metal-np2.5","metal-a3","metal-a3.5","metal-a4","metal-b1","metal-b2","metal-b3","metal-b4","metal-c1","metal-c2","metal-c4","metal-d2","metal-d3","metal-d4"]'>
                  <div class="selectList__pic"><img src="/katana/common/img/color_simulation/img_zilconia_katana.jpg" alt="LT 10+CZR"></div>
                  <div class="selectList__name">LT 10+CZR</div>
                </label>
              </li>
            </ul>
          </div>
        </section>
        <div class="sideBar">
          <div class="sideBar__inner">
            <div class="choice choice--prep">
              <div class="choice__theme">支台歯色</div>
              <div class="choice__inner">
                <div class="choice__pic"><img src="/katana/common/img/color_simulation/img_noSelect.png" alt="?"></div>
                <div class="choice__name">????</div>
              </div>
            </div>
            <div class="choice choice--target">
              <div class="choice__theme">目標色</div>
              <div class="choice__inner">
                <div class="choice__pic"><img src="/katana/common/img/color_simulation/img_noSelect.png" alt="?"></div>
                <div class="choice__name">????</div>
              </div>
            </div>
            <div class="choice choice--zirconia">
              <div class="choice__theme">ジルコニア</div>
              <div class="choice__inner">
                <div class="choice__pic"><img src="/katana/common/img/color_simulation/img_noSelect.png" alt="?"></div>
                <div class="choice__name">????</div>
              </div>
            </div>
            <div class="sideBar__btn">
              <div class="btn__clear">ALL CLEAR</div>
              <div class="btn__next"><a href="/katana/stain_glaze/">NEXT</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="btnArea">
      <div class="btn btn__next"><a href="/katana/stain_glaze/">NEXT</a></div>
      <div class="btn btn__top"><a href="/katana/">TOP</a></div>
    </div>
  </main>
  <?php
    include('../footer.html');
  ?>

  <script src="/katana/common/js/jquery-3.3.1.min.js"></script>
  <script src="/katana/common/js/common.js"></script>
  <script src="/katana/common/js/fixedSidebar.js"></script>
  <script src="/katana/common/js/select.js"></script>
</body>
</html>