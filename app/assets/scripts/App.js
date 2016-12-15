import MobileMenu from './modules/MobileMenu';
import RevealOnScroll from './modules/RevealOnScroll';
import $ from 'jquery';
import StickyHeader from './modules/StickyHeader';
import Modal from './modules/Modal';
import lightbox from './modules/lightbox.min';

var mobileMenu = new MobileMenu();
new RevealOnScroll($("#trinity"), "45%");
new RevealOnScroll($("#alligator-farm"), "85%");
new RevealOnScroll($("#ksc"), "60%");
new  RevealOnScroll($("#random-photos"), "60%");
var stickyHeader = new StickyHeader();
var modal = new Modal();
