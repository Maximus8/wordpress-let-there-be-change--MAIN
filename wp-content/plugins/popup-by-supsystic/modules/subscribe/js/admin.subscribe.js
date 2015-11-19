jQuery(document).ready(function(){
	// Show/hide additonal subscribe options
	jQuery('#ppsPopupEditForm').find('[name="params[tpl][sub_dest]"]').change(function(){
		var selectedSubMethod = jQuery(this).val();
		jQuery('.ppsPopupSubDestOpts:visible').slideUp( g_ppsAnimationSpeed );
		var selectedShell = jQuery('.ppsPopupSubDestOpts_'+ selectedSubMethod);
		if(selectedShell && selectedShell.size()) {
			selectedShell.slideDown( g_ppsAnimationSpeed );
		}
		if(toeInArray(selectedSubMethod, ['aweber']) === -1) {	// For aweber we use simple post send to aweber side method - so all messages is generated by aweber
			jQuery('.ppsPopupSubTxtsAndRedirect').slideDown( g_ppsAnimationSpeed );
		} else {
			jQuery('.ppsPopupSubTxtsAndRedirect').slideUp( g_ppsAnimationSpeed );
		}
		if(toeInArray(selectedSubMethod, ['wordpress']) !== -1) {	// Only for wordpress - we will handle emails about subscribe confirm
			jQuery('.ppsPopupSubEmailTxt').slideDown( g_ppsAnimationSpeed );
		} else {
			jQuery('.ppsPopupSubEmailTxt').slideUp( g_ppsAnimationSpeed );
		}
		if(!PPS_DATA.isPro
			&& typeof(g_ppsProSubMethods) !== 'undefined' 
			&& typeof(g_ppsProSubMethods[ selectedSubMethod ]) !== 'undefined'
		) {
			var proDialog = ppsGetMainPromoPopup();
			var promoLink = jQuery('.ppsPopupSubDestOpts_'+ selectedSubMethod).find('.ppsProOptMiniLabel a').attr('href');
			proDialog.find('a').attr('href', promoLink);
			proDialog.dialog('open');
		}
	}).change();
	_ppsUpdateMailchimpLists();
	
	jQuery('#ppsPopupEditForm').find('[name="params[tpl][sub_mailchimp_api_key]"]').change(function(){
		_ppsUpdateMailchimpLists();
	});
	jQuery('.ppsTestEmailFuncBtn').click(function(){
		jQuery.sendFormPps({
			btn: this
		,	data: {mod: 'mail', action: 'testEmail', test_email: jQuery('input[name=test_email]').val()}
		,	onSuccess: function(res) {
				if(!res.error) {
					jQuery('.ppsTestEmailWasSent').slideDown( g_ppsAnimationSpeed );
				}
			}
		});
		return false;
	});
	jQuery('#ppoPopupSubFields').sortable({
		revert: true
	,	placeholder: 'ui-state-highlight-sub-fields'
	,	axis: 'x'
	,	items: '.ppsSubFieldShell'
	,	update: function() {
			ppsSavePopupChanges();
		}
    });
	ppsInitSubFieldsPromoPopup();
});
function _ppsGetMailchimpKey() {
	return jQuery.trim( jQuery('#ppsPopupEditForm').find('[name="params[tpl][sub_mailchimp_api_key]"]').val() );
}
function _ppsUpdateMailchimpLists() {
	if(jQuery('#ppsPopupEditForm').find('[name="params[tpl][sub_dest]"]').val() == 'mailchimp') {
		var key = _ppsGetMailchimpKey();
		if(key && key != '') {
			jQuery('#ppsMailchimpListsShell').hide();
			jQuery('#ppsMailchimpNoApiKey').hide();
			jQuery.sendFormPps({
				msgElID: 'ppsMailchimpMsg'
			,	data: {mod: 'subscribe', action: 'getMailchimpLists', key: key}
			,	onSuccess: function(res) {
					if(!res.error) {
						jQuery('#ppsMailchimpLists').html('');
						var selectedListsIds = ppsPopup && ppsPopup.params.tpl && ppsPopup.params.tpl.sub_mailchimp_lists ? ppsPopup.params.tpl.sub_mailchimp_lists : [];
						for(var listId in res.data.lists) {
							var selected = toeInArrayPps(listId, selectedListsIds) ? 'selected="selected"' : '';
							jQuery('#ppsMailchimpLists').append('<option '+ selected+ ' value="'+ listId+ '">'+ res.data.lists[ listId ]+ '</option>');
						}
						jQuery('#ppsMailchimpListsShell').show();
						jQuery('#ppsMailchimpLists').chosen().trigger('chosen:updated');
					}
				}
			});
		} else {
			jQuery('#ppsMailchimpNoApiKey').show();
			jQuery('#ppsMailchimpListsShell').hide();
		}
	}
}
function ppsInitSubFieldsPromoPopup() {
	if(!PPS_DATA.isPro) {
		var $proOptWnd = jQuery('#ppsSubAddFieldWnd').dialog({
			modal:    true
		,	autoOpen: false
		,	width: 580
		,	height: 380
		,	buttons: {
				'Get It': function() {
					window.open( $proOptWnd.find('.ppsPromoImgUrl').attr('href') );
					$proOptWnd.dialog('close');
				}
			,	'Cancel': function() {
					$proOptWnd.dialog('close');
				}
			}
		});
		jQuery('#ppsSubAddFieldBtn').click(function(){
			$proOptWnd.dialog('open');
			return false;
		});
	}
}