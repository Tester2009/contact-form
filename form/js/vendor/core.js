/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function templateObject(){
    
    "use strict";
    
    var formIdentity = '#formContact';
    var formUrl = 'mod/submit.php';
    
    function _submitForm() {
        "use strict";
    
    this.init = function(){
        
        "use strict";
        $(document).foundation(function(){
            _submitForm();
        });
    }
    
}

$(function() {
    var templateObj = new templateObject();
    templateObj.int();
});
