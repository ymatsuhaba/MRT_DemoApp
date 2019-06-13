import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


// 2. ルートをいくつか定義します
// 各ルートは 1 つのコンポーネントとマッピングされる必要があります。
// このコンポーネントは実際の `Vue.extend()`、
// またはコンポーネントオプションのオブジェクトでも構いません。
// ネストされたルートに関しては後で説明します
import Login from '../components/login/login'
const routes = [
    { path: '/login', component: Login },
]


const router = new VueRouter({
    routes // `routes: routes` の短縮表記
})