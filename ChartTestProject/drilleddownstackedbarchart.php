<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(255, 26, 104, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(255, 26, 104, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(255, 26, 104, 1);
        background: white;
      }
    </style>
  </head>
  <body>
    
    <div class="chartCard">
      <div class="chartBox">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // setup 
    
    const data2={
        labels:['Coffee Beans','Tea Leaves'],
        datasets:[{
            label:'Export Data',
            data:[8,5,4],
            backgroundColor:['brown','green'],
            borderColor:['brown','green'],
            borderWidth:1
        },
        {
            label:'Cold Drinks Data',
            data:[18,12],
            backgroundColor:['cyan','gold'],
            borderColor:['cyan','gold'],
            borderWidth:1
        }]
    };  
    const cofee={
        labels:['Indonesia','Greece','Philippines'],
        dataset:[{
            label:'Coffee Bean Export',
            data:[8,5,4],
            backgroundColor:'brown',
            borderColor:'brown',
            borderWidth:1
        }]
    }; 
    const tea={
        labels:['China','India','Sri Lanka'],
        dataset:[{
            label:'Tea Leaves Export',
            data:[6,4,2],
            backgroundColor:'green',
            borderColor:'green',
            borderWidth:1
        }]
    };
    const icecofee={
        labels:['Indonesia','Greece','Philippines'],
        dataset:[{
            label:'Ice Coffee',
            data:[10,5,4],
            backgroundColor:'cyan',
            borderColor:'cyan',
            borderWidth:1
        }]
    };
    const icetea={
        labels:['Japan','thaiwan','Hong Kong'],
        dataset:[{
            label:'Ice Tea',
            data:[7,4,2],
            backgroundColor:'gold',
            borderColor:'gold',
            borderWidth:1
        }]
    };

    
    const data = {
        labels:['Coffee Beans','Tea Leaves'],
        datasets:[{
            label:'Export Data',
            data:[8,5,4],
            backgroundColor:['brown','green'],
            borderColor:['brown','green'],
            borderWidth:1
        },
        {
            label:'Cold Drinks Data',
            data:[18,12],
            backgroundColor:['cyan','gold'],
            borderColor:['cyan','gold'],
            borderWidth:1
        }]
    }; 

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
            x: {
                stacked : true,
            },
          y: {
            beginAtZero: true,
            stacked : true
          }
        }
      }
    };

    // render init block
    let ctx = document.getElementById('myChart')
    let myChart = new Chart(
        ctx,
      config
    );


    function clickHandler(click){
      const points = myChart.getElementsAtEventForMode(click, 'nearest', { intersect: true }, true);
    if (points.length){
      const firstPoint = points[0];
      console.log(firstPoint);
      console.log(firstPoint.datasetIndex);
      console.log(firstPoint.index);

      if( (firstPoint.datasetIndex==0 && firstPoint.index==0)){
        myChart.config.data= cofee; 
      }
      myChart.update();

    }
    }
    ctx.onclick=clickHandler;
    </script>

  </body>
</html>
