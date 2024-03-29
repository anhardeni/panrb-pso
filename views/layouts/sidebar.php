<?php
  use yii\helpers\Url;

  use hscstudio\mimin\components\Mimin;

  $menuItems =
  [
               [
                  'visible' => !Yii::$app->user->isGuest,
                  'label' => 'User / Group',
                  'icon' => 'users',
                  'url' => '#',
                  'items' => [
              ['label' => 'App. Route', 'icon' => 'user', 'url' => ['/mimin/route/'], 'visible' => !Yii::$app->user->isGuest],
              ['label' => 'Role', 'icon' => 'users', 'url' => ['/mimin/role/'], 'visible' => !Yii::$app->user->isGuest],
              ['label' => 'User', 'icon' => 'user', 'url' => ['/mimin/user/'], 'visible' => !Yii::$app->user->isGuest],
                  ], ],

               [
               'visible' => !Yii::$app->user->isGuest,
               'label' => 'Referensi',
               'icon' => 'archive',
               'url' => '#',
               'items' => [
             //   ['label' => 'Setting', 'icon' => 'cog', 'url' => ['/setting/index'], 'visible' => !Yii::$app->user->isGuest],
           
             //   ['label' => 'Jenis Barang', 'icon' => 'database', 'url' => ['/jenis-barang/index'], 'visible' => !Yii::$app->user->isGuest],
             //  ['label' => 'Satuan', 'icon' => 'cube', 'url' => ['/satuan/index'], 'visible' => !Yii::$app->user->isGuest],
         
             //  ['label' => 'Barang', 'icon' => 'briefcase', 'url' => ['/barang/index'], 'visible' => !Yii::$app->user->isGuest],
             //  ['label' => 'Gudang', 'icon' => 'building', 'url' => ['/gudang/index'], 'visible' => !Yii::$app->user->isGuest],
            //   ['label' => 'Supplier', 'icon' => 'user', 'url' => ['/supplier/index'], 'visible' => !Yii::$app->user->isGuest],
               ['label' => 'Putusan Analis', 'icon' => 'users', 'url' => ['/pso-analis/index'], 'visible' => !Yii::$app->user->isGuest],


               ], ],

               [
               'visible' => !Yii::$app->user->isGuest,
               'label' => 'Rekapitulasi',
               'icon' => 'plus-circle',
               'url' => '#',
               'items' => [
               ['label' => 'rekap type 1', 'icon' => 'truck', 'url' => ['/rekap-pso1/index'], 'visible' => !Yii::$app->user->isGuest],

               ['label' => 'rekap type 2', 'icon' => 'truck', 'url' => ['/rekap-pso1/index2'], 'visible' => !Yii::$app->user->isGuest],
     
     

               ],
               ],

         
               // [
               // 'visible' => !Yii::$app->user->isGuest,
               // 'label' => 'Barang Masuk',
               // 'icon' => 'plus-circle',
               // 'url' => '#',
               // 'items' => [
               // ['label' => 'Pembelian', 'icon' => 'truck', 'url' => ['/pembelian/index'], 'visible' => !Yii::$app->user->isGuest],
     

               // ],
               // ],

               // [
               // 'visible' => !Yii::$app->user->isGuest,
               // 'label' => 'Barang Keluar',
               // 'icon' => 'minus-circle',
               // 'url' => '#',
               // 'items' => [
               // ['label' => 'Penjualan', 'icon' => 'desktop', 'url' => ['/penjualan/index'], 'visible' => !Yii::$app->user->isGuest],


               // ],
               // ],

               [
               'visible' => !Yii::$app->user->isGuest,
               'label' => 'Penyederhanaan Birokrasi',
               'icon' => 'minus-circle',
               'url' => '#',
               'items' => [
               ['label' => 'PSO-admin', 'icon' => 'desktop', 'url' => ['/pso-master/index'], 'visible' => !Yii::$app->user->isGuest],
               ['label' => 'PSO-user', 'icon' => 'desktop', 'url' => ['/pso-user/index'], 'visible' => !Yii::$app->user->isGuest],


               ],
               ],

     
          ];

          
  if (!Yii::$app->user->isGuest) {
      if (Yii::$app->user->identity->username !== 'admin') {
          $menuItems = Mimin::filterMenu($menuItems);
      }
    }

    ?>
<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="<?=Url::to(['/'])?>">PANRB</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="<?=Url::to(['/'])?>">PANRB</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li ><a class="nav-link" href="<?=Url::to(['/'])?>"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
      <li class="menu-header">Menu</li>

        <?php echo app\widgets\Menu::widget(
            [
                'items' => $menuItems,
            ]
            //Menus::menuItems()
); ?>
    </ul>
</aside>
