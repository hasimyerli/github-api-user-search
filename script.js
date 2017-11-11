var app = new Vue({
  el: '#searchUser',
  data: {
    query:"",
    results: false,
    userNameLength: 9,
    loading: false,
    listShow:false,
    messageShow:false,
    display:"none !important",
    errorMessage:null
  },
  methods: {
    search: function(){
      this.loading = true;
      this.listShow = false;
      this.messageShow = false;
      this.display = "block !important";
      fetch(`https://api.github.com/search/users?q=${this.query}`)
      .then(results => results.json())
      .then(results => {
        if (!results.errors) {
          this.loading = false;
          this.listShow = true;
          this.$set(this, 'results', results);
        } else {
          this.loading = false;
          this.messageShow = true;
          this.errorMessage = "Not Found User";
          return;
        }
      });
    },
    info: function(url){
      console.log("This section will contain user information.");
    }
  }
});
