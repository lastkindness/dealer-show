(function ($) {

	initCarSelectManufacturer() ;
	initCarSelectModel() ;

	function initCarSelectManufacturer(){

		$('.car-selection__form #car-type').change( function(){

			let type = $(this).val() ;

			var filterData = {
				'action' : 'homegetcar',
				'security': filter_params.ajax_nonce,
				'type' : type
			}

			$.ajax({
				url: filter_params.ajaxurl,
				data: filterData,
				type: 'POST',
				success: function(data) {
					if (data) {

						$('.column__find-cars .input-container__car-brand').remove() ;
						$('.column__find-cars .input-container__car-model').remove() ;
						$('.column__find-cars').append(data) ;

						$(".column__find-cars select").each(function (index, item) {
					        var text = $(item).data("placeholder");
					        $(item).select2({
					          placeholder: text,
					          minimumResultsForSearch: -1
					        });
					    });

					    initCarSelectModel() ;

					}
				}
			});

		} )

	}

	function initCarSelectModel(){

		$('.car-selection__form #car-brand').change( function(){

			let type = $('.car-selection__form #car-type').val() ;
			let brand = $(this).val() ;

			var filterData = {
				'action' : 'homegetmodel',
				'security': filter_params.ajax_nonce,
				'brand' : brand,
				'type' : type
			}

			$.ajax({
				url: filter_params.ajaxurl,
				data: filterData,
				type: 'POST',
				success: function(data) {
					if (data) {

						$('.column__find-cars .input-container__car-model .car-model-ajax').remove() ;
						$('.column__find-cars .input-container__car-model').append(data) ;

						$(".column__find-cars select").each(function (index, item) {
					        var text = $(item).data("placeholder");
					        $(item).select2({
					          placeholder: text,
					          minimumResultsForSearch: -1
					        });
					    });

					}
				}
			});

		} )

	}

})(jQuery);