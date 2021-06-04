<template>
  <div>
    aaaa
    <input type="radio" id="one" value="岡崎橋ビル" v-model="place">
    <label for="one">岡崎橋ビル</label>
    <br>
    <input type="radio" id="two" value="本社" v-model="place">
    <label for="two">本社</label>
    <br>
    <span>Picked: {{ place }}</span>
    <br>
    <span>{{ mapConfig.center.lat }}</span>
    <br>
    <span>{{ mapConfig.center.lng }}</span>

      出たよ
    <div class="map" ref="googleMap" />
  </div>
</template>

<script>
import GoogleMapsApiLoader from 'google-maps-api-loader';

export default {
  name: 'Map',
  data() {
    return {
      place: '岡崎橋ビル', 

      google: null,
      mapConfig: {
        // 地図の中心地点
        center: {
          lat: 34.68286620763049,
          lng: 135.48942106828244
        },
        // 拡大率
        zoom: 17,
        // 全てのUIを消す
        disableDefaultUI: true,
        // // 地図、航空写真ボタン削除
        // mapTypeControl:false,
        // // ズームボタン削除
        // zoomControl:false,
        // // ストリートビューボタン削除
        // streetViewControl:false,
        // // フルスクリーンボタン削除
        // fullscreenControl:false,
      }
    }
  },
  async mounted() {
    this.google = await GoogleMapsApiLoader({
      apiKey: ''
    });
    this.initializeMap();
  },
  methods: {
    initializeMap() {
      new this.google.maps.Map(this.$refs.googleMap, this.mapConfig);
    } 
  },
  watch: {
      place: function(){
          if(this.place == '岡崎橋ビル')
          {
              this.mapConfig.center.lat = 34.682910319991365
              this.mapConfig.center.lng = 135.4893996106105
              // マップ再読み込み
              this.initializeMap();
          }
          else
          {
              this.mapConfig.center.lat = 34.67981481380863
              this.mapConfig.center.lng = 135.49274708362623
              // マップ再読み込み
              this.initializeMap();
          }
      }
  }
}
</script>

<style lang="scss" scoped>
// ダサいので円形表示は保留 border-radius: 250px;
.map {
  width: 500px;
  height: 500px;
}
</style>