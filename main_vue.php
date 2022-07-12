<main id="app">
    <div class="container">
        <div class="px-5 py-3">
            <div class="px-5">
                <div class="row row-cols-5 g-3">
                    <template v-for="album in db">
                        <div class="col">
                            <div class="p-2 text-center my-card h-100">
                                <div><img
                                        :src="album.poster"
                                        alt=""></div>
                                <h5 class="pt-4 text-white text-uppercase">{{album.title}}</h5>
                                <div class="text-muted mt-4">{{album.author}}</div>
                                <div class="text-muted">{{album.genre}}</div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</main>