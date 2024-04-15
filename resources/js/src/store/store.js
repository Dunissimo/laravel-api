import {createStore} from "vuex";
import {index} from "@/store/modules/index.js";

export default createStore({
    modules: {
        index,
    }
});
