// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            natality: 500,
            suicide: 20,
            car: 40
        }, {
            period: '2010 Q2',
            natality: 2778,
            suicide: 2294,
            car: 2441
        }, {
            period: '2010 Q3',
            natality: 4912,
            suicide: 1969,
            car: 2501
        }, {
            period: '2010 Q4',
            natality: 3767,
            suicide: 3597,
            car: 5689
        }, {
            period: '2011 Q1',
            natality: 6810,
            suicide: 1914,
            car: 2293
        }, {
            period: '2011 Q2',
            natality: 5670,
            suicide: 4293,
            car: 1881
        }, {
            period: '2011 Q3',
            natality: 4820,
            suicide: 3795,
            car: 1588
        }, {
            period: '2011 Q4',
            natality: 15073,
            suicide: 5967,
            car: 5175
        }, {
            period: '2012 Q1',
            natality: 10687,
            suicide: 4460,
            car: 2028
        }, {
            period: '2012 Q2',
            natality: 8432,
            suicide: 5713,
            car: 1791
        }],
        xkey: 'period',
        ykeys: ['natality', 'suicide', 'car'],
        labels: ['natality', 'suicide', 'car crash'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
});
