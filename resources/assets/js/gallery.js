var Gallery = (function() {
  var body = $(".view-gallery");
  var token = "196483102.3a81a9f.2ad98eb1df794a73978cfeb16867e94c";
  var id = "196483102";
  var numberPhotos = 20;
  var baseUrl = "https://api.instagram.com/v1/users/";
  var gallery = $("[data-behavior~=gallery-wrapper]");

  var init = function() {
    if (body.length > 0) {
      $.ajax({
      	url: `${baseUrl}${id}/media/recent`,
      	dataType: "jsonp",
      	type: "GET",
      	data: {access_token: token, count: numberPhotos},
      	success: function(data){
          for ( x in data.data ) {
            gallery.append(`
              <div class="col-sm-3">
                <img src="${data.data[x].images.standard_resolution.url}"
                  class="w-100 img-fluid"
                  alt="${data.data[x].caption.text ? data.data[x].caption.text : "Restaurante Porfirios"}"
                />
              </div>
            `);
          }
      	},
      	error: function(data){
          console.log(data);
      		gallery.append(`
            <h3 class="text-center">Las fotos de esta galería no están disponibles</h3>
          `);
      	}
      });
    }
  }

  return {
    init: init,
  };
})();

module.exports = Gallery;
