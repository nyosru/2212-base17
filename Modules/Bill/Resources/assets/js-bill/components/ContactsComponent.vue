<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3>Салон-магазин &quot;В мире бильярда&quot;</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="wrp">
          <div class="map-box">
            <div>
              <p>
                <b>В&nbsp;мире&nbsp;бильярда</b>
                <br />
                салон-магазин
                <br />
                ( ООО&nbsp;&quot;ЛТАВА&quot; )
                <br />
                <br />
                г.Тюмень,
                <br />
                ул.Республики 207
                <br />
                офис 110
                <br />
                <br />
                E-mail:
                <a href="mailto:ltawa@mail.ru">ltawa@mail.ru</a>
                <br />

                Тел:
                <a href="tel:+79091800645">8-909-180-06-45</a>
              </p>
            </div>
          </div>

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d541.438944548636!2d65.6016598292614!3d57.12413999880889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43bbe12829071acb%3A0x81713b4c4caa0724!2z0YPQuy4g0KDQtdGB0L_Rg9Cx0LvQuNC60LgsIDIwNywgMTEwLCDQotGO0LzQtdC90YwsINCi0Y7QvNC10L3RgdC60LDRjyDQvtCx0LsuLCA2MjUwMTk!5e0!3m2!1sru!2sru!4v1672016571301!5m2!1sru!2sru"
            width="100%"
            height="600"
            style="border: 0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup></script>

<style lang="scss">
.wrp {
  max-width: 100%;
  margin: 0 auto;
  position: relative;
}

.map-box {
  position: absolute;
  text-align: center;
  top: 120px;
  left: 5vw;
  padding: 0;
  background: #fff;

  background-size: 90%;
  border: 1px solid #ddd;
  border-radius: 3%;
  overflow: hidden;
  z-index: 100;
  width: 250px;
  box-shadow: -1px -1px 24px 0px rgba(50, 50, 50, 0.5);
}

.map-box div {
  padding: 20px;
  background-color: rgba(255, 255, 255, 0.9);
}
</style>
