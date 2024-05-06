<!DOCTYPE html>
<html>
	<head>
		
		<title>
			Binary and Linear Search Visualization 
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<style>
			body {
				background: #e6e6e6;
			}
			table{
				display : flex;
			}
			.row{
				margin-bottom: 10px;
			}
			input[type="text"],
			input[type='button']{
				margin-right : 1rem;
				border-radius: .4rem;
			}
			input[type='button'],
			input[type='reset'],
			input[type='submit'] {
				background-color:#1e87f0;
				color:#fff;
				border:1px solid transparent;
			}
			#canvas{
				margin-top: 30px;
			}
		</style>
			
		<!-- jqueury stuff.  Only used for the animation speed slider. -->
		<link rel="stylesheet" href="<?=base_url('assets/');?>ThirdParty/jquery-ui-1.8.11.custom.css">				
		<script src="<?=base_url('assets/');?>ThirdParty/jquery-1.5.2.min.js"></script>
		<script src="<?=base_url('assets/');?>ThirdParty/jquery-ui-1.8.11.custom.min.js"></script>
				
		<!-- Javascript for the actual visualization code -->
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/CustomEvents.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/UndoFunctions.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/AnimatedObject.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/AnimatedLabel.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/AnimatedCircle.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/AnimatedRectangle.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/AnimatedLinkedList.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/HighlightCircle.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/Line.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/ObjectManager.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AnimationLibrary/AnimationMain.js"> </script>

		<script type = "text/javascript" src = "<?=base_url('assets/');?>AlgorithmLibrary/Algorithm.js"> </script>
		<script type = "text/javascript" src = "<?=base_url('assets/');?>AlgorithmLibrary/Search.js"> </script>
			
	 </head> 
	
	<body onload="init();" class="VisualizationMainPage">
		
		<div id="container" class="container">
			
			<div id="header" class="row">  
				<h1>Searching Sorted List</h1>
			</div>
			<div id="mainContent" class="row"> 
				<hr/>
				<div id="algoControlSection">
					<!-- Table for buttons to control specific animation (insert/find/etc) -->
					<!-- (filled in by javascript code specific to the animtion) -->
					<table id="AlgorithmSpecificControls"> </table> 
				</div>
					<!-- Drawing canvas where all animation is done.  Note:  can be resized in code -->
									
				<canvas id="canvas" width="1000" height="500"></canvas>
				
				<div id = "generalAnimationControlSection">
					<!-- Table for buttons to control general animation (play/pause/undo/etc) ->
					<!-- (filled in by javascript code, specifically AnimationMain.js)  -->

					<table id="GeneralAnimationControls">  </table>		
				</div>
				
			</div>

		</div><!-- container -->
	</body>
</html>
