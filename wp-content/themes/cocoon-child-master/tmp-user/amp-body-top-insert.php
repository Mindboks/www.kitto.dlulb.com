<?php
//<body>タグ直後編集用のテンプレートです。
//子テーマのカスタマイズ部分を最小限に抑えたい場合に有効なテンプレートとなります。
?>
<?php if (!is_user_administrator()) :
//管理者を除外してカウントする場合は以下に挿入 ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P34X5MZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php endif; ?>
<?php //全ての訪問者をカウントする場合は以下に挿入 ?>


