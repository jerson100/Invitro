import * as THREE from 'three';
import {OrbitControls} from 'OrbitControls';
import {OBJLoader} from 'objloader'
import {MTLLoader} from 'mtlloader'
import {STLLoader} from 'stlloader'

let object, scene, camera, renderer, container;

var object_w = 600,
    object_h = 600;

var camera_position = 45,
    scale = 1.2,
    speed_rotate = 0.005;
    
if(window.matchMedia("(max-width: 700px)").matches){
    camera_position = 60;scale = 1.1;speed_rotate = 0.010;
}

function init(){
    
    scene = new THREE.Scene();
    scene.background = new THREE.Color('white');

    camera = new THREE.PerspectiveCamera(
        75,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
    );
    camera.position.z = camera_position;

    renderer = new THREE.WebGLRenderer({
        antialias: true
    });

    var container_3d = document.querySelector('#canvas_3d');
    document.querySelector('section.hero .row').appendChild(container_3d);

    renderer.setPixelRatio( window.devicePixelRatio );
    renderer.setSize(object_w, object_h);

    renderer.setSize(window.innerWidth,window.innerHeight)
    container_3d.appendChild( renderer.domElement );
    // document.body.appendChild(renderer.domElement)

    scene.add(object)

    let light = new THREE.AmbientLight(0xFFFFFF, 1);
    scene.add( light );

    const control = new OrbitControls(camera, renderer.domElement)
    control.enableZoom = false;
    //control.enableRotate = false;
    control.enablePan = false;
    control.enableDamping = true;
    control.dampingFactor = 0.5;
    control.maxPolarAngle = Math.PI / 2;

    animate();
}

function animate(){
    requestAnimationFrame(animate)
    
    object.rotation.y += speed_rotate;
    renderer.render(scene, camera)
}


let loader = new MTLLoader();
loader.load('https://invitro.pe/wp-content/themes/theme_invitro/3ds/iv.mtl', (model)=>{
    const z = new OBJLoader();
    z.setMaterials(model)
    z.load('https://invitro.pe/wp-content/themes/theme_invitro/3ds/iv.obj', (obj)=>{
        obj.scale.set(scale,scale,scale);
        obj.position.set(0,0,0);
        // obj.rotation.x = -Math.PI/2;

        object = obj
        init();
    })
})