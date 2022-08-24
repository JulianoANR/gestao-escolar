import './bootstrap';

import Alpine from 'alpinejs';
import mask from '@alpinejs/mask'
import collapse from '@alpinejs/collapse'

window.Alpine = Alpine;

Alpine.plugin(mask);
Alpine.plugin(collapse);

Alpine.start();
