const Application = PIXI.Application;
const app = new Application({
    width: 1920,
    height: 1080,
    transparent:true
});
document.body.appendChild(app.view);

const loader = PIXI.Loader.shared;
loader.add('backgroundImage','Fotot/splash.jpg')
    .load(setup);

function setup(loader, resources) {
    const backgroundImage = PIXI.Sprite.from(resources.backgroundImage.texture);
    backgroundImage.anchor.set(0.5);
    backgroundImage.x = app.renderer.width / 2;
    backgroundImage.y = app.renderer.height / 2;

    const container = new PIXI.Container();
    container.addChild(backgroundImage);
    app.stage.addChild(container);

    const displacementSprite = PIXI.Sprite.from('Fotot/displacement_map.jpeg');
    const displacementFilter = new PIXI.filters.DisplacementFilter(displacementSprite);

    displacementSprite.texture.baseTexture.wrapMode = PIXI.WRAP_MODES.REPEAT;
    displacementSprite.scale.set(0.5);

    container.addChild(displacementSprite);

    const options1 = {
        amplitude: 40,
        wavelength: 30,
        speed: 200,
        radius: 80
    }

    const shockwaveFilter1 = new PIXI.filters.ShockwaveFilter([
        Math.random() * app.screen.width,
        Math.random() * app.screen.height
    ], options1, 0);

    const options2 = {
        amplitude: 80,
        wavelength: 45,
        speed: 240,
        radius: 100
    }

    const shockwaveFilter2 = new PIXI.filters.ShockwaveFilter([
        Math.random() * app.screen.width,
        Math.random() * app.screen.height
    ], options2, 0);

    container.filters = [displacementFilter, shockwaveFilter1, shockwaveFilter2];

    

    app.ticker.add(function(){
        displacementSprite.x++;
        if(displacementSprite.x > displacementSprite.width)
            displacementSprite.x = 0;

        shockwaveFilter1.time += 0.01;
        if(shockwaveFilter1.time > 0.7) {
            shockwaveFilter1.time = 0;
            shockwaveFilter1.center = [
                Math.random() * app.screen.width,
                Math.random() * app.screen.height
            ]
        }

        shockwaveFilter2.time += 0.01;
        if(shockwaveFilter2.time > 0.5) {
            shockwaveFilter2.time = 0;
            shockwaveFilter2.center = [
                Math.random() * app.screen.width,
                Math.random() * app.screen.height
            ]
        }
    });

}