/*
 * Copyright 2016 Google Inc. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
var vrView;

// All the scenes for the experience
var scenes = {
  petra: {
    image: '/assets/panoramas/petra.jpg',
    preview: '/assets/panoramas/petra-preview.jpg'
  },
  christTheRedeemer: {
    image: '/assets/panoramas/christ-redeemer.jpg',
    preview: '/assets/panoramas/christ-redeemer-preview.jpg'
  },
  machuPicchu: {
    image: '/assets/panoramas/machu-picchu.jpg',
    preview: '/assets/panoramas/machu-picchu-preview.jpg'
  },
  chichenItza: {
    image: '/assets/panoramas/chichen-itza.jpg',
    preview: '/assets/panoramas/chichen-itza-preview.jpg'
  },
  tajMahal: {
    image: '/assets/panoramas/taj-mahal.jpg',
    preview: '/assets/panoramas/taj-mahal-preview.jpg'
  },
  nukus1: {
    image: '/assets/panoramas/nukus1.jpg',
    preview: '/assets/panoramas/nukus1-preview.jpg'
  },
};

function onLoad() {
  vrView = new VRView.Player('#vrview', {
    width: '100%',
    height: 480,
    image: '/images/blank.png',
    is_stereo: false,
    is_autopan_off: true
  });

  vrView.on('ready', onVRViewReady);
  vrView.on('modechange', onModeChange);
  vrView.on('error', onVRViewError);
}

function loadScene(id) {
  console.log('loadScene', id);

  // Set the image
  vrView.setContent({
    image: scenes[id].image,
    preview: scenes[id].preview,
    is_autopan_off: true
  });

  // Unhighlight carousel items
  var carouselLinks = document.querySelectorAll('ul.carousel li a');
  for (var i = 0; i < carouselLinks.length; i++) {
    carouselLinks[i].classList.remove('current');
  }

  // Highlight current carousel item
  document.querySelector('ul.carousel li a[href="#' + id + '"]')
      .classList.add('current');
}

function onVRViewReady(e) {
  console.log('onVRViewReady');

  // Create the carousel links
  var carouselItems = document.querySelectorAll('ul.carousel li a');
  for (var i = 0; i < carouselItems.length; i++) {
    var item = carouselItems[i];
    item.disabled = false;

    item.addEventListener('click', function(event) {
      event.preventDefault();
      loadScene(event.target.parentNode.getAttribute('href').substring(1));
    });
  }

  loadScene('petra');
}

function onModeChange(e) {
  console.log('onModeChange', e.mode);
}

function onVRViewError(e) {
  console.log('Error! %s', e.message);
}

window.addEventListener('load', onLoad);
