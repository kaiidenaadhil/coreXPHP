<?php
// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// lamination of routes
$app->router->get('/lamination', [LaminationController::class, 'laminationIndex']);
$app->router->get('/lamination/build', [LaminationController::class, 'laminationBuild']);
$app->router->post('/lamination/build', [LaminationController::class, 'laminationRecord']);
$app->router->get('/lamination/{laminationIdentify}/destroy', [LaminationController::class, 'laminationDestroy']);
$app->router->get('/lamination/{laminationIdentify}/modify', [LaminationController::class, 'laminationModify']);
$app->router->post('/lamination/{laminationIdentify}/modify', [LaminationController::class, 'laminationEdit']);
$app->router->get('/lamination/{laminationIdentify}', [LaminationController::class, 'laminationDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// factory of routes
$app->router->get('/factory', [FactoryController::class, 'factoryIndex']);
$app->router->get('/factory/build', [FactoryController::class, 'factoryBuild']);
$app->router->post('/factory/build', [FactoryController::class, 'factoryRecord']);
$app->router->get('/factory/{factoryIdentify}/destroy', [FactoryController::class, 'factoryDestroy']);
$app->router->get('/factory/{factoryIdentify}/modify', [FactoryController::class, 'factoryModify']);
$app->router->post('/factory/{factoryIdentify}/modify', [FactoryController::class, 'factoryEdit']);
$app->router->get('/factory/{factoryIdentify}', [FactoryController::class, 'factoryDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// Paper of routes
$app->router->get('/Paper', [PaperController::class, 'PaperIndex']);
$app->router->get('/Paper/build', [PaperController::class, 'PaperBuild']);
$app->router->post('/Paper/build', [PaperController::class, 'PaperRecord']);
$app->router->get('/Paper/{PaperIdentify}/destroy', [PaperController::class, 'PaperDestroy']);
$app->router->get('/Paper/{PaperIdentify}/modify', [PaperController::class, 'PaperModify']);
$app->router->post('/Paper/{PaperIdentify}/modify', [PaperController::class, 'PaperEdit']);
$app->router->get('/Paper/{PaperIdentify}', [PaperController::class, 'PaperDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);
