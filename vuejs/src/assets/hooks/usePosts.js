import axios from "axios";

export function usePosts() {
    try{
        this.isPostLoading = true;
        const response = await axios.get('http://testyii2/web/product', {
            params: {
                _page: this.page,
                _limit: this.limit
            }
        });
        this.totalPages = Math.ceil(response.headers['x-total-count'] / this.limit)
        this.posts = response.data;
    } catch (e) {
        alert('Ошибка')

    } finally{
        this.isPostLoading = false;
    }
}

