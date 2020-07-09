
<!-- 変数type, alert_title, slot を参照するコンポーネント -->

<div class="alert alert-{{ $type }}">
  <h4 class="alert-heading">{{ $alert_title }}</h4>
  <p>{{ $slot }}</p>
</div>
