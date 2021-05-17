'use strict';

/**
 *  Load modules
 */

import main from './modules/main';
import form from './modules/form';
import sliders from './modules/sliders';
import faq from './modules/faq';
import modals from './modules/modals';
import map from './modules/map';
import filters from './modules/filters';
$(document).ready(() => {
    main();
    form();
    sliders();
    faq();
    modals();
    map();
    filters();
});

import '../scss/app.scss';
