var app = new Vue({
  el: '#searchUser',
  data: {
    query:"",
    results: false,
    userNameLength: 9
  },
  methods: {
    search: function(){
      fetch(`https://api.github.com/search/users?q=${this.query}`)
      .then(results => results.json())
      .then(results => {
        this.$set(this, 'results', results)
      });
    }
  }
});
