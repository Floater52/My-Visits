import MobileMenu from './modules/MobileMenu';
import RevealOnScroll from './modules/RevealOnScroll';
import $ from 'jquery';
import StickyHeader from './modules/StickyHeader';
import Modal from './modules/Modal';
import lightbox from './modules/lightbox.min';

var mobileMenu = new MobileMenu();
new RevealOnScroll($("#trinity"), "45%");
new RevealOnScroll($("#alligator-farm"), "70%");
new RevealOnScroll($("#ksc"), "70%");
new  RevealOnScroll($("#random-photos"), "75%");
var stickyHeader = new StickyHeader();
var modal = new Modal();
