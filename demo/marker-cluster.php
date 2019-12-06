<?php require('includes/header.php') ?>
<div id="simplegmaps-1" class="google-map">
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 1, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 2, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 3, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 4, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 5, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 6, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 7, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 8, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 9, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Stortorget 9, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.60596529999999, 13.004473200000007"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.6077186, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.6087186, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.6097186, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.61, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.601, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.602, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.603, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.604, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.605, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.606, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.607, 13.004776399999969"></div>
</div>


<div class="highlight">
	<h3 class="code">javascript</h3>
	<pre><code class="javascript">
	var sgmaps = new simplegmaps();
sgmaps.init({
	container: '#simplegmaps-1',
	cluster: true
});
</code></pre>
</div>

<div class="highlight">
	<h3 class="code">HTML</h3>
	<pre><code class="html">

	<div id="simplegmaps-1" class="google-map">
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 1, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 2, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 3, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 4, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 5, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 6, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 7, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 8, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Sofielundsvägen 9, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-address="Stortorget 9, Malmö, Sweden"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.60596529999999, 13.004473200000007"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.6077186, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.6087186, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.6097186, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.61, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.601, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.602, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.603, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.604, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.605, 13.004776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.606, 13.005776399999969"></div>
  <div class="map-marker" data-title="Lorem ipsum" data-latlng="55.607, 13.004776399999969"></div>
</div>

		</code></pre>
</div>

<?php require('includes/scripts.php') ?>

<script>
var sgmaps = new simplegmaps();
sgmaps.init({
	container: '#simplegmaps-1',
	cluster: true
});

</script>

<?php require('includes/footer.php') ?>
