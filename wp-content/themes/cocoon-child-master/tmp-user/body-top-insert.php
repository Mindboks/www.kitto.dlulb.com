<?php
//<body>タグ直後編集用のテンプレートです。
//子テーマのカスタマイズ部分を最小限に抑えたい場合に有効なテンプレートとなります。
?>
<?php if (!is_user_administrator()) :
//管理者を除外してカウントする場合は以下に挿入 ?>

<?php endif; ?>
<?php //全ての訪問者をカウントする場合は以下に挿入 ?>

        <!-- ハンバーガーメニュー -->
        <div id="header-logo-menu">
            <div class="header-logo-menu">
                <div id="nav-drawer">
                    <input id="nav-input" type="checkbox" class="nav-unshown">
                    <label id="nav-open" for="nav-input"><span></span></label>
                    <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                    <div id="nav-content">
                        <ul>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/tv-audio/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-tv"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            TV・オーディオ
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            テレビ・Blu-rayプレーヤー・DVDプレーヤー・オーディオ機器・イヤホン・ヘッドフォン・無線機器
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/camera-binoculars-telescope/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-camera"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            カメラ
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            デジタル一眼カメラ・デジタルカメラ・双眼鏡・望遠鏡
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/computer/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-laptop"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            パソコン
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            デスクトップパソコン・ノートパソコン・ディスプレイ・プリンター・無線LAN・ネットワーク機器・PCパーツ・アクセサリー
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/smartphone-mobile-communication/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            モバイル
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            スマートフォン・スマホアクセサリ・格安SIM・モバイルデータ通信・ポケットWi-Fi
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/app-pc-software/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-apple-alt"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            アプリ・ソフト
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            ビジネス・オフィス・セキュリティー・画像‐映像制作・ゲーム
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/digital-content/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-photo-video"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            デジタルコンテンツ
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            動画・写真・画像・音楽・音声
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/books-comics-magazines/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-book-open"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            本
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            コミック・雑誌・人文-地歴-哲学-社会・絵本・児童書・図鑑・科学・医学・技術・ライフスタイル・文庫・ビジネス・経済・就職・中古
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/cd-dvd-blu-ray-software/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-compact-disc"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            CD・DVD・Blu-rayソフト
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            CD・DVD・Blu-ray
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/game/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-apple-alt"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ゲーム
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            ゲーム機本体・ゲームソフト・ゲーム周辺機器
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/drone/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-bezier-curve"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ドローン
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            競技用ドローン・撮影用ドローン・農薬散布用ドローン・工業用ドローン
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/home-appliances-and-supplies/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-charging-station"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ホーム家電・用品
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            掃除機・空調家電・生活家電・理美容家電・照明・洗濯用品・バス用品
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/kitchen-appliances-and-supplies/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-coffee"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            キッチン家電・用品
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            冷蔵庫・冷凍庫・炊飯器・電子レンジ・オーブンレンジ・食器・カトラリー・調理器具・グラス・調理・製菓道具・弁当箱・水筒・キッチン雑貨
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/interior-miscellaneous-goods/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-chess"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            インテリア・雑貨
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            インテリア雑貨・生活雑貨・ソファ・ソファベッド・カーペット・マット・畳・ダイニングセット・カーテン・ブラインド・イス・チェア・ライト・照明器具・テーブル・クッション・座布団・デスク・鏡・置き時計・掛け時計・ゴミ箱・壁紙・装飾フィルム・壁紙・装飾フィルム・手芸・クラフト・生地・仏壇・仏具・神具
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/furniture-storage-cleaning/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-couch"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            家具・収納・掃除
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            家具・収納用品・掃除用品
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/sleep/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-bed"></i>　
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            睡眠
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            掛け布団・敷布団・掛け敷布団セット・枕・抱き枕・毛布・ブランケット・マットレス・ベッドパッド・敷きパッド・ベッド
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/food/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-pizza-slice"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            食品
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            精肉・肉加工品・魚介類・水産加工品・米・雑穀・麺類・パン・ジャム・シリアル・惣菜・チーズ・乳製品・漬け物・梅干し・キムチ・野菜・きのこ・調味料・フルーツ・果物
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/confectionery-sweets/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-cookie-bite"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            菓子・スイーツ
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            クッキー・焼き菓子・チョコレート・和菓子・洋菓子・ナッツ・ケーキ
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/liquor/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-beer"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            お酒
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            ビール・発泡酒・ワイン・日本酒・焼酎・洋酒・リキュール・チューハイ・カクテル・ノンアルコール飲料
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/drink/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-wine-bottle"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            飲料
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            水・ミネラルウォーター・コーヒー・野菜飲料・果実飲料・お茶・紅茶・炭酸飲料・スポーツドリンク・ウォーターサーバー
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/healeth-beauty/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-briefcase-medical"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            健康・美容
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            健康グッズ・コンタクトレンズ・香水・フレグランス・コスメ・化粧品
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/sports/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-table-tennis"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            スポーツ
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            自転車・サイクリング・フィッシング・マリンスポーツ・ウインタースポーツ・登山・トレッキング・ランニング・マラソン・フィットネス・トレーニング・体操・ダンス・野球・ソフトボール・サッカー・フットサル・バスケットボール・テニス・水泳・スポーツウェア・アクセサリー
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/outdoors/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-campground"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            アウトドア
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            アウトドア用品・キャンプ場・アクティビティ
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/hobby/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-shapes"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ホビー
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            おもちゃ・パーティー・イベント用品・コスプレ・変装・仮装・フィギュア・サバイバルゲーム・トイガン・アート・美術品・骨董品・民芸品・占い・開運・風水・パワーストーン
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/musical-instrument/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-guitar"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            楽器
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            ピアノ・キーボード・ギター・ベース・管楽器・吹奏楽器・ドラム・弦楽器・PA機器・DAW・DTM・レコーダー・DJ機器・アクセサリー
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/fashion/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-tshirt"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ファッション
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            レディース・メンズ・インナー・ナイトウェア
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/fashion-accessories/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ファッション小物
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            バッグ・財布・帽子・眼鏡・サングラス・マフラー・スカーフ・スニーカー・サンダル・腕時計・ジュエリー
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/baby-kids/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-baby"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ベビー・キッズ
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            ベビー服・知育玩具・学習玩具・ベビー向けおもちゃ・ぬいぐるみ・乗用玩具・三輪車・スポーツトイ・アクショントイ
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/office-kitchen/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-person-booth"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            オフィス・厨房
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            オフィス家具・オフィス機器・業務用厨房機器-用品・事務用品・印鑑・ハンコ
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/stationery/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-pen-alt"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            文房具
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            文具・学用品・筆記用具・ノート・メモ帳・手帳・カレンダー
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/pets/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-dog"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ペット
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            犬用品・猫用品・小動物用品・熱帯魚・アクアリウム・ペット用お手入れ用品
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/car-motorcycle/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-car-side"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            車・バイク
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            車用タイヤ・車用ホイール・車用パーツ・車用アクセサリー・カーナビ・カーエレクトロニクス・バイク用タイヤ・ホイール・バイク用パーツ・バイク用アクセサリー・バイクウェア・プロテクター
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/travel/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-suitcase-rolling"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            旅行
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            旅行用品
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/diy-tools/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-wrench"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            DIY
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            工具・エクステリア・木材・建築資材・設備・研究・実験用品
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/gardening/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-tree"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ガーデニング
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            農業機器・農業用品・ガーデンファニチャー・鉢花・フラワーアレンジメント・プリザーブドフラワー・観葉植物・造花・人工観葉植物・ギフト・プレゼント
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/disaster-prevention-crime-prevention/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-bell"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            防災・防犯
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            防災グッズ・防犯グッズ
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/sdg%ef%bd%93/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-recycle"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            SDGｓ
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            サスティナブル
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/rental-subscription/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-user-tag"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            レンタル・サブスクサービス
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            業務用品・店舗用品・家電・パソコン関連サービス・衣類関連サービス・寝具関連サービス・冠婚葬祭サービス・車・バイク関連サービス
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/printing-service/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-print"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            印刷サービス
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            印刷・コピー・現像サービス
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/repair-service/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-screwdriver"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            リペアサービス
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            時計修理・眼鏡修理・ジュエリー・アクセサリーの修理
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/agency-delivery-service/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-truck"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            代行・配達サービス
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            代行サービス・配達サービス
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/remodeling-service/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            リフォームサービス
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            リフォーム
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/internet-service/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-server"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            インターネットサービス
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            レンタルサーバー・ドメイン・ショッピングカート・ホームルーター・国内レンタルWi-Fi
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/shopping-service/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-shopping-cart"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ショッピングサービス
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            ネットスーパー・食材宅配サービス
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/job-hunting/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            就活
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            就活
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/finance/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-piggy-bank"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            金融
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            金融
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/investment/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-heart"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            投資
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            FX・投資信託・株式投資
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/marriage-romance/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-heart"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            結婚・恋愛
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            結婚相談所
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/real-estate/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fab fa-houzz"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            不動産
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            引越
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/loan-card/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-credit-card"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            ローン・カード
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            プリペイドカード・クレジットカード・スマホ決済・カードローン・自動車ローン・住宅ローン
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/insurance/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-car-crash"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            保険
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            生命保険・医療保険・がん保険
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/qualification-school/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            資格・スクール
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            プログラミング・オフィス・エンターテインメント
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/long-term-care/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-bath"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            介護
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            介護用品
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/ceremonial-occasion/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-hand-holding-heart"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            冠婚葬祭
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            冠婚葬祭
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                            <li>
                                <div class="a-category">
                                    <!-- リンクページ -->
                                    <a href="https://www.kitto.dlulb.com/category/end-of-life/">
                                        <div class="i-category">
                                            <!-- https://fontawesome.com/ -->
                                            <i class="fas fa-praying-hands"></i>
                                        </div>
                                        <!-- メインカテゴリー -->
                                        <div class="title-category">
                                            終活
                                        </div>
                                        <!-- サブカテゴリー -->
                                        <div class="text-category">
                                            終活
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <div class="clear-floar"></div>
                        </ul>
                    </div>
                </div>
                <div class="logo-area">
                    <!--shinobi1-->
                    <script type="text/javascript" src="//xa.shinobi.jp/ufo/190575900"></script><noscript><a
                            href="//xa.shinobi.jp/bin/gg?190575900" target="_blank"><img
                                src="//xa.shinobi.jp/bin/ll?190575900" border="0"></a><br><span style="font-size:9px"><img
                                style="margin:0;vertical-align:text-bottom;" src="//img.shinobi.jp/tadaima/fj.gif"
                                width="19" height="11"> </span></noscript>
                    <!--shinobi2-->
                </div>
            </div>
        </div>