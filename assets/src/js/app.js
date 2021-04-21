'use strict';

/**
 *  Load modules
 */

import main from './modules/main';
import form from './modules/form';
import sliders from './modules/sliders';
import faq from './modules/faq';
$(document).ready(() => {
    main();
    form();
    sliders();
    faq();
});

import '../scss/app.scss';
