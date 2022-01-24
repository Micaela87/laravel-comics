<footer>
    <!-- upper footer -->
    <section id="upper-footer">
      <div class="container container-flex">
        <div class="flex-container-column">
            {{-- <div v-for="(data, i) in menu" :key="i">
                <h3>{{ data.title.toUpperCase() }}</h3>
                <ul>
                    <li v-for="(menuData, k) in data.data" :key="k">
                        <a href="menuData.url">{{ capitalizeFirstLetter(menuData.text) }}</a>
                    </li>
                </ul>
            </div> --}}
        </div>
        <img src={{ asset("/storage/assets/dc-logo-bg.png") }} alt="dc logo">
      </div>
    </section>
    <!-- lower footer -->
    <section id="lower-footer">
      <div class="container container-flex">
        <button>SIGN UP NOW!</button>
        <div class="container-flex">
          <h3>FOLLOW US</h3>
          {{-- <ul>
            <li v-for="(icon, i) in icons" :key="i">
              <a href="icon.url"><img :src="require('@/assets/img/' + icon.icon + '.png')" :alt="icon.name"></a>
            </li>
          </ul> --}}
        </div>
      </div>
    </section>
  </footer>