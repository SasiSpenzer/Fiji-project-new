(function($) {
  'use strict';
  $(function() {
    
    var dashData1 = [
      [0,36.57749563156254],
      [1,38.990117798360984],
      [2,42.33951429212372],
      [3,41.81299261981016],
      [4,37.43049180497279],
      [5,32.50742948537699],
      [6,28.15321230561721],
      [7,24.734038382708317],
      [8,23.48248771261796],
      [9,20.406002456692214],
      [10,16.59886277727973],
      [11,12.156859927914581],
      [12,9.229765251904174],
      [13,5.183401848384374],
      [14,9.605706708466142],
      [15,10.832074796645134],
      [16,13.268792742800557],
      [17,18.216203428328363],
      [18,13.963666987062208],
      [19,18.712081450016612],
      [20,13.72401606510321],
      [21,11.305095416130975],
      [22,13.773906992422056],
      [23,15.834031310396583],
      [24,12.926545228583812],
      [25,17.595569228566347],
      [26,21.90850212276817],
      [27,18.29990271583387],
      [28,14.340994854410802],
      [29,18.22389641710976],
      [30,14.883609800856053],
      [31,13.019139849150623],
      [32,14.553083951054631],
      [33,15.417025583778472],
      [34,16.640872368623782],
      [35,19.456813236353057],
      [36,14.595960349995135],
      [37,17.729784515799526],
      [38,13.86824197051369],
      [39,9.492952801660538],
      [40,11.912479814449945],
      [41,9.798782954230068],
      [42,6.117552232900492],
      [43,1.4130313413037507],
      [44,2.3640186232524685],
      [45,2.3620174492590778],
      [46,4.523611468529182],
      [47,3.7627065666017216],
      [48,5.7686167365911043],
      [49,5.08594242151745846],
      [50,1.905264426860338],
      [51,8.27642052341136036],
      [52,7.9183672429606382],
      [53,5.027341617316905],
      [54,2.8449308083068967],
      [55,6.827661569105635],
      [56,6.215632967625112],
      [57,9.831855054294463],
      [58,9.393752601741996],
      [59,11.962549642491954],
      [60,10.01016629019579],
      [61,9.03698508678906],
      [62,6.053332776990388],
      [63,4.56216961329746],
      [64,2.7601184969979364],
      [65,4.345620131013858],
      [66,3.6626759042117385],
      [67,4.27936456640813],
      [68,2.0166954203189142],
      [69,1.4881023513956224],
      [70,3.7196511214339196],
      [71,1.5333390837655454],
      [72,5.780072548768565],
      [73,4.904719814229008],
      [74,1.0799012554825165],
      [75,4.72338119051706],
      [76,6.314725021867233],
      [77,4.277597816664166],
      [78,5.1544567140954225],
      [79,5.239845249502064],
      [80,3.877879174711641],
      [81,8.225872226683242],
      [82,7.264487465012946],
      [83,6.504325850409032],
      [84,1.7088839316517497],
      [85,11.49433994707275364],
      [86,10.5002886069980867],
      [87,3.8186248032905223],
      [88,4.790166662214078],
      [89,8.584014466610698],
      [90,10.231484497623207],
      [91,11.085662593015236],
      [92,15.692957864072707],
      [93,19.729820239992353],
      [94,18.14728404932766],
      [95,13.557879905430191],
      [96,12.0222003194338],
      [97,7.527743748664358],
      [98,3.7125580070986235],
      [99,9.7561429229810717],
      [100,9.24510598794585],
      [101,13.491288627936356],
      [102,18.422574259759138],
      [103,22.48813237262491],
      [104,18.7617308169055],
      [105,15.200987690731651],
      [106,14.567673790440317],
      [107,14.493364129654488],
      [108,12.06862995100759],
      [109,13.792354597964184],
      [110,13.398123710429495],
      [111,15.43357006142243],
      [112,15.838711304223441],
      [113,17.717113116366015],
      [114,14.363451521168152],
      [115,10.632076034419065],
      [116,12.704986280918988],
      [117,14.730515775966076],
      [118,18.64339616589121],
      [119,22.966268490839116],
      [120,18.086847938929818],
      [121,22.85442941807395],
      [122,23.862425058129165],
      [123,27.15039006269054],
      [124,24.7853194960341],
      [125,20.05439683907793],
      [126,22.789014412927482],
      [127,20.999064905231663],
      [128,16.665833423656743],
      [129,15.119579474719686],
      [130,13.122059029397477],
      [131,10.758963293991616],
      [132,11.409391406435187],
      [133,13.187657409342435],
      [134,10.191416382864197],
      [135,9.299880450312266],
      [136,9.200558705463123],
      [137,10.3761519864489],
      [138,15.201427613560849],
      [139,12.563611410586677],
      [140,14.01025663372129],
      [141,18.218049208936158],
      [142,16.36071205382429],
      [143,17.780867922487836],
      [144,18.918372217382256],
      [145,15.30583162112299],
      [146,18.133034345626925],
      [147,16.378646720850767],
      [148,14.835942770608781],
      [149,10.041195447639177]
    ];
    
    var dashData2 = [
      [0,53.08330533680049],
      [1,50.33339517545416],
      [2,49.4029746664779],
      [3,47.791939081203566],
      [4,49.09471219192674],
      [5,50.66529743518582],
      [6,48.749718825997206],
      [7,48.84333276982059],
      [8,53.51394720398375],
      [9,52.93467940905747],
      [10,49.083909652316756],
      [11,50.27480737843102],
      [12,48.37957308101624],
      [13,44.84022012471776],
      [14,40.71830916489318],
      [15,41.24962375997834],
      [16,45.63889630450356],
      [17,44.66117259629492],
      [18,41.393918522372914],
      [19,38.20495807999945],
      [20,39.68970488580452],
      [21,41.02366924388095],
      [22,39.41137193753915],
      [23,35.66049049363585],
      [24,38.5316402746093],
      [25,38.536952802123125],
      [26,40.69853423533536],
      [27,38.79970643855877],
      [28,42.98845795943349],
      [29,46.360136088412915],
      [30,43.5528691841886],
      [31,40.65605934650181],
      [32,36.5040222131244],
      [33,31.79517009935011],
      [34,28.913911507798105],
      [35,29.681580006957674],
      [36,29.57017024157237],
      [37,33.13695968240512],
      [38,37.084637076369454],
      [39,35.86922272605444],
      [40,37.60007436604805],
      [41,39.6599902960551],
      [42,39.01855935146662],
      [43,34.101066517369006],
      [44,37.486228204869676],
      [45,39.29733687111992],
      [46,38.46411897069526],
      [47,37.71927995665536],
      [48,40.15208911247334],
      [49,35.897096450476575],
      [50,31.505997358944384],
      [51,31.816999110802946],
      [52,30.50460962834996],
      [53,25.741310049337464],
      [54,28.23602445151448],
      [55,28.48317685385772],
      [56,30.001070495921475],
      [57,32.164958534602505],
      [58,32.99295659942683],
      [59,37.68193430054417],
      [60,35.24212764591677],
      [61,39.18772362995824],
      [62,41.376347845481895],
      [63,41.45950716612605],
      [64,43.78985456358012],
      [65,39.416694565047884],
      [66,39.32972776309515],
      [67,43.80480524720717],
      [68,42.434410137245514],
      [69,43.67300580223356],
      [70,38.79887604059381],
      [71,43.570128406921526],
      [72,41.81988828932836],
      [73,44.829528785933896],
      [74,46.19223595854988],
      [75,47.69550173883899],
      [76,49.010522215031536],
      [77,46.40480781018069],
      [78,51.28051836395483],
      [79,50.158430192052556],
      [80,53.60466613842059],
      [81,56.08734803007076],
      [82,52.72459300615355],
      [83,56.601951946760394],
      [84,60.26245067204903],
      [85,58.36945168202019],
      [86,56.59491823723127],
      [87,55.755294545253776],
      [88,54.74810139653445],
      [89,54.27203682664068],
      [90,58.659985887413185],
      [91,57.00658547275452],
      [92,60.52029839853601],
      [93,57.6015284629649],
      [94,56.48890586246457],
      [95,55.10455188969404],
      [96,54.357265081931686],
      [97,52.394359471010326],
      [98,54.52899302331695],
      [99,54.16762513026156],
      [100,51.95657669321307],
      [101,51.19677107897459],
      [102,46.35100350085707],
      [103,48.33623433000422],
      [104,45.84986413510889],
      [105,48.22054173701362],
      [106,43.30402458869659],
      [107,45.823705773087944],
      [108,43.48498341409474],
      [109,41.32116785138174],
      [110,40.99342590634263],
      [111,38.496913606221845],
      [112,40.10010461807938],
      [113,44.861885054292394],
      [114,44.03401133327108],
      [115,41.41251651321317],
      [116,37.800397369625514],
      [117,39.295001424962734],
      [118,35.24310363081255],
      [119,32.125154958611844],
      [120,35.68772234352005],
      [121,38.00169527592055],
      [122,37.960866448524754],
      [123,38.702527394097245],
      [124,37.457771477588224],
      [125,37.51129389195443],
      [126,33.108727543689724],
      [127,35.09710598798716],
      [128,33.11742126933996],
      [129,31.873922447406848],
      [130,29.18642792871095],
      [131,31.91579925678714],
      [132,34.370661166914054],
      [133,32.91433174216821],
      [134,33.17197835246117],
      [135,37.16446574836367],
      [136,32.60291809386715],
      [137,36.94627368938524],
      [138,35.9869296328639],
      [139,38.12898104938889],
      [140,42.55368007736426],
      [141,41.57493569939069],
      [142,45.54394197350075],
      [143,46.30674824728742],
      [144,45.73213644396193],
      [145,45.42768540578047],
      [146,42.52964420434585],
      [147,44.44398524408891],
      [148,39.74894644038498],
      [149,44.71669577260144]
    ];
    
    var dashData3 = [
      [0,15.23664159018842],
      [1,13.950034069379143],
      [2,18.644830736016026],
      [3,20.769612795319304],
      [4,20.9672980159902],
      [5,25.306231062193945],
      [6,22.147632883383046],
      [7,20.909654447655207],
      [8,18.426864707429758],
      [9,15.465005080095395],
      [10,13.200993777812627],
      [11,14.298423899495088],
      [12,14.064190975238525],
      [13,12.756500849206802],
      [14,11.009698256259721],
      [15,13.777021847639084],
      [16,9.764516822388899],
      [17,12.692252142103655],
      [18,10.993546294133743],
      [19,12.76637263741139],
      [20,13.843200048454541],
      [21,12.99710730408541],
      [22,13.822031388180491],
      [23,10.292515338153533],
      [24,5.810285403597657],
      [25,7.660875205768917],
      [26,8.80933653938396],
      [27,5.686812232232839],
      [28,5.63261704703088],
      [29,6.316648245814662],
      [30,4.292790984709081],
      [31,3.697685557314916],
      [32,5.455501325916567],
      [33,6.531394786185377],
      [34,8.182002901837398],
      [35,10.97985605046474],
      [36,7.670515545499569],
      [37,9.735460695108053],
      [38,10.953255620842702],
      [39,9.507118597321119],
      [40,5.406694867279592],
      [41,4.93085440378951],
      [42,0.7194264766862029],
      [43,2.3619348017672],
      [44,5.584661939154044],
      [45,10.081512479626763],
      [46,10.688764814852894],
      [47,8.312501373210273],
      [48,8.453461343329785],
      [49,8.544757446852685],
      [50,5.845487925639054],
      [51,1.5807150114153075],
      [52,0.563335804242973],
      [53,4.894286843146261],
      [54,9.856287534207203],
      [55,4.896396641974256],
      [56,1.2942099540425414],
      [57,5.809421858534812],
      [58,1.733415110300613],
      [59,5.460384956746324],
      [60,5.990998309935479],
      [61,7.594177171313888],
      [62,10.660329512374963],
      [63,5.973124255808589],
      [64,3.3313399294306265],
      [65,2.9044866902167623],
      [66,6.997197180694009],
      [67,10.523117772813361],
      [68,12.2391695609805211],
      [69,15.542664698417907],
      [70,19.803040324502735],
      [71,23.065087817954282],
      [72,23.995144609672131],
      [73,19.572683988371006],
      [74,16.262408675238298],
      [75,16.343448236306536],
      [76,6.594421915015488],
      [77,2.2274478023982844],
      [78,2.917574438953957],
      [79,6.405517005560797]
    ];
    
    var dashData4 = [
      [0,6.128957947555989],
      [1,10.84817222898398],
      [2,10.082875592706364],
      [3,8.379792694345753],
      [4,9.547667054986002],
      [5,4.773069367954017],
      [6,3.0454348426761015],
      [7,3.185480541480409],
      [8,4.450143911018419],
      [9,8.546949979037999],
      [10,6.050127209461188],
      [11,4.410453949908726],
      [12,2.8471832046168135],
      [13,3.2079540734030276],
      [14,0.9162857987827975],
      [15,4.6063565674411855],
      [16,3.8108543994622526],
      [17,0.07206516983173028],
      [18,2.0235838597966103],
      [19,3.11038525002839],
      [20,7.661023220500137],
      [21,4.392807043336401],
      [22,2.095095656433122],
      [23,3.6570708335265856],
      [24,2.4750755395505095],
      [25,7.365775338287607],
      [26,3.160729824900333],
      [27,5.540806251220914],
      [28,0.6666892513129863],
      [29,0.45739329594884204],
      [30,3.0811785305861257],
      [31,2.6892574426453804],
      [32,9.518442007203902],
      [33,12.031943999285872],
      [34,16.195611227357478],
      [35,20.843438986023465],
      [36,23.379026518714024],
      [37,21.460750940722328],
      [38,18.40015951232427],
      [39,20.358446800608565],
      [40,19.603101971624245],
      [41,17.573732753993674],
      [42,18.335981070943816],
      [43,18.91414918074011],
      [44,21.429677122613647],
      [45,22.632616262811762],
      [46,25.94041622331629],
      [47,28.28824125745345],
      [48,24.435585052120953],
      [49,19.597224874784906],
      [50,16.697366660087496],
      [51,17.2746170933131],
      [52,19.375521763009953],
      [53,18.566968104092673],
      [54,16.44690797028392],
      [55,20.442159904725813],
      [56,18.092434838530224],
      [57,19.09142302964581],
      [58,20.00188167403888],
      [59,24.672205627775327],
      [60,21.740520957489338],
      [61,26.026676694036176],
      [62,21.822075708233086],
      [63,18.695019208154772],
      [64,15.29250743609338],
      [65,10.428562033214584],
      [66,11.55987585035231],
      [67,14.896344657234035],
      [68,10.307653031970014],
      [69,7.82306217533851],
      [70,10.238887296153184],
      [71,8.8820687254494],
      [72,10.100845630385322],
      [73,9.217362717192456],
      [74,7.896629068410565],
      [75,5.618935926339423],
      [76,1.5131215135592138],
      [77,0.2784413238662804],
      [78,0.7433401750417863],
      [79,5.451097931401492]
    ];
    
    var dashData5 = [
      [0,6.324329988896064],
      [1,4.5545479994319145],
      [2,6.100415206277958],
      [3,7.432637151690175],
      [4,5.60263986254995],
      [5,4.832425480686457],
      [6,0.9075445440427758],
      [7,3.1482139596880163],
      [8,3.5885516133784767],
      [9,8.182754904215557],
      [10,6.837879179399149],
      [11,7.716258659531048],
      [12,9.75364233299447],
      [13,7.201169154192655],
      [14,9.630620744220206],
      [15,11.538477281715668],
      [16,13.035970513058636],
      [17,9.503486957660966],
      [18,13.105314699985755],
      [19,15.573652620996299],
      [20,18.36838092867314],
      [21,19.350295101555055],
      [22,22.69794643352061],
      [23,23.35219679846173],
      [24,20.91736598898101],
      [25,22.911176901130386],
      [26,21.090864789052763],
      [27,20.48061479748539],
      [28,21.426374503640886],
      [29,20.891864381778447],
      [30,16.957950831314058],
      [31,21.859429734865678],
      [32,24.445685183180625],
      [33,21.60020575061327],
      [34,24.182176166954967],
      [35,21.86974880152203],
      [36,19.539183274840212],
      [37,21.515732665615417],
      [38,20.24304044649329],
      [39,21.42144524531482],
      [40,17.43905530887784],
      [41,21.32170798934231],
      [42,23.496165105754205],
      [43,20.329972299235536],
      [44,17.810139981879978],
      [45,13.81114512021962],
      [46,12.997268524103216],
      [47,10.799564050000965],
      [48,12.512143426754726],
      [49,14.43450958489095],
      [50,16.307532107912],
      [51,17.805531426224746],
      [52,20.335760159301408],
      [53,17.283957375094232],
      [54,14.358038015713984],
      [55,12.244453474656833],
      [56,14.851550722124355],
      [57,12.376637218044237],
      [58,10.410990876698504],
      [59,14.213384593585047],
      [60,14.086784566997245],
      [61,14.958720914431318],
      [62,17.654154385117913],
      [63,17.90512378115347],
      [64,15.51065801821678],
      [65,13.614902552930381],
      [66,15.012164925379324],
      [67,12.526591306146639],
      [68,12.41629841447126],
      [69,13.14610812485586],
      [70,11.99821556340692],
      [71,7.673455706892817],
      [72,9.020477318416384],
      [73,4.883009317288051],
      [74,8.216160091544365],
      [75,12.972532341711904],
      [76,14.900762708964251],
      [77,16.071024828496675],
      [78,16.80733921452504],
      [79,21.50456189793593]
    ];

    var dashData6 = [
      [0,49.331065063219285],
      [1,48.79814898366035],
      [2,50.61793547911337],
      [3,53.31696317779434],
      [4,54.78560952831719],
      [5,53.84293992505776],
      [6,54.682958355082874],
      [7,56.742547193381654],
      [8,56.99677491680908],
      [9,56.144488388681445],
      [10,56.567122269843885],
      [11,60.355022877262684],
      [12,58.7457726121753],
      [13,61.445407102315514],
      [14,61.112870581452086],
      [15,58.57202276349258],
      [16,54.72497594269612],
      [17,52.070341498681124],
      [18,51.09867716530438],
      [19,47.48185519192089],
      [20,48.57861168097493],
      [21,48.99789250679436],
      [22,53.582491800119456],
      [23,50.28407438696142],
      [24,46.24606628705599],
      [25,48.614330310543856],
      [26,51.75313497797672],
      [27,51.34463925296746],
      [28,50.217320673443936],
      [29,54.657281647073304],
      [30,52.445057217757245],
      [31,53.063914668561345],
      [32,57.07494250387825],
      [33,52.970403392565515],
      [34,48.723854145068756],
      [35,52.69064629353968],
      [36,53.590890118378205],
      [37,58.52332126105745],
      [38,55.1037709679581],
      [39,58.05347017020425],
      [40,61.350810521199946],
      [41,57.746188675088575],
      [42,60.276910973029786],
      [43,61.00841651851749],
      [44,57.786733623457636],
      [45,56.805721677811356],
      [46,58.90301959619822],
      [47,62.45091969566289],
      [48,58.75007922945926],
      [49,58.405842466185355],
      [50,56.746633122658444],
      [51,52.76631598845634],
      [52,52.3020769891715],
      [53,50.56370473325533],
      [54,55.407205992344544],
      [55,50.49825590435839],
      [56,52.4975614755482],
      [57,48.79614749316488],
      [58,47.46776704767111],
      [59,43.317880548036456],
      [60,38.96296121124144],
      [61,34.73218432559628],
      [62,31.033700732272116],
      [63,32.637987000382296],
      [64,36.89513637594264],
      [65,35.89701755609185],
      [66,32.742284578187544],
      [67,33.20516407297906],
      [68,30.82094321791933],
      [69,28.64770271525896],
      [70,28.44679026902145],
      [71,27.737654438195236],
      [72,27.755190738237744],
      [73,25.96228929938593],
      [74,24.38197394166947],
      [75,21.95038772723346],
      [76,22.08944448751686],
      [77,23.54611335622507],
      [78,27.309610481106425],
      [79,30.276849322378055],
      [80,27.25409223418214],
      [81,29.920374921780102],
      [82,25.143447932376702],
      [83,23.09444253479626],
      [84,23.79459089729409],
      [85,23.46775072519832],
      [86,27.9908486073969],
      [87,23.218855925354447],
      [88,23.9163141686872],
      [89,19.217667423877607],
      [90,15.135179958932145],
      [91,15.08666008920407],
      [92,11.006269617032526],
      [93,9.201671310476282],
      [94,7.475865090236113],
      [95,11.645754524211824],
      [96,15.76161040821357],
      [97,13.995208323029495],
      [98,12.59338056489445],
      [99,13.536707176236195],
      [100,15.01308268888571],
      [101,13.957161242832626],
      [102,13.237091619700053],
      [103,18.10178875669874],
      [104,20.634765519499563],
      [105,21.064946755449817],
      [106,25.370593801826132],
      [107,25.321453557866203],
      [108,20.947464543531186],
      [109,18.750516645477425],
      [110,15.382042945356737],
      [111,14.569147793065632],
      [112,17.949159188821604],
      [113,15.965876707018058],
      [114,16.359355082317443],
      [115,14.163139419453657],
      [116,12.106761506858124],
      [117,14.843319717588216],
      [118,17.24291158460492],
      [119,17.799018581487058],
      [120,14.038359368301329],
      [121,18.658227817264983],
      [122,18.463689935573676],
      [123,22.687619584142652],
      [124,25.088957744790036],
      [125,28.184893996099582],
      [126,28.03276492115397],
      [127,24.11167758305713],
      [128,24.28007484247854],
      [129,28.23487421795626],
      [130,26.246971673504287],
      [131,29.330939820784877],
      [132,26.07749855928238],
      [133,23.921786397788168],
      [134,28.825012181053275],
      [135,25.140449169947626],
      [136,21.79048000172746],
      [137,23.05414699421924],
      [138,20.712904460250886],
      [139,19.727388210287337],
      [140,15.219713454550508],
      [141,16.567062865467058],
      [142,21.46105146001275],
      [143,24.699736621958863],
      [144,20.05510726036824],
      [145,16.200669070105356],
      [146,16.938945414022744],
      [147,15.50411643355061],
      [148,14.788500646665874],
      [149,16.97330575970296]
    ];

    if ($('#recentRevenueChart').length) {
      $.plot('#recentRevenueChart', 
      [{
        data: [[3,1],[4,5],[6,2],[7,3],[8,4],[9,13],[10,5],[11,9],[12,13],[13,17]],
        color: '#00cccb'
      },
      {
        data: [[2,3],[3,5],[4,7],[5,6],[6,12],[7,12],[8,15],[10,13],[11,12],[12,17]],
        color: '#dde2e6',
        dashes: {
          show: true,
          dashLength: 4
        }
      },
      {
        data: [[1,2],[3,13],[5,4],[7,7],[8,13],[9,18],[11,13]],
        color: '#6f42c1',
      }],
      {
        series: {
          shadowSize: 0,
          lines: {
            lineWidth: 1.5,
            fill: true,
            fillColor: 'transparent'
          },
        },
        grid: {
          borderWidth: 0
        },
        yaxis: {
          min: 0,
          max: 20,
          tickColor: '#ddd',
          ticks: [[0,'1m'],[5,'1.5m'],[10,'2m'],[15,'2.5m'],[20,'3m']],
          font: {
            color: '#444',
            size: 10
          }
        },
        xaxis: {
          show: false,
          mode: 'categories',
          tickColor: 'transparent',
          ticks: [[2,'5am'],[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'10am'],[8,'11am'],[9,'12nn'],[10,'1pm'],[11,'2pm'],[12,'3pm'],[13,'4pm']],
          font: {
            color: '#999',
            size: 9
          }
        }
      });
    }

    if ($('#recentRevenueChartDark').length) {
      $.plot('#recentRevenueChartDark', 
      [{
        data: [[3,1],[4,5],[6,2],[7,3],[8,4],[9,13],[10,5],[11,9],[12,13],[13,17]],
        color: '#00cccb'
      },
      {
        data: [[2,3],[3,5],[4,7],[5,6],[6,12],[7,12],[8,15],[10,13],[11,12],[12,17]],
        color: '#28283e',
        dashes: {
          show: true,
          dashLength: 4
        }
      },
      {
        data: [[1,2],[3,13],[5,4],[7,7],[8,13],[9,18],[11,13]],
        color: '#6f42c1',
      }],
      {
        series: {
          shadowSize: 0,
          lines: {
            lineWidth: 1.5,
            fill: true,
            fillColor: 'transparent'
          },
        },
        grid: {
          borderWidth: 0
        },
        yaxis: {
          min: 0,
          max: 20,
          tickColor: '#2a2c40',
          ticks: [[0,'1m'],[5,'1.5m'],[10,'2m'],[15,'2.5m'],[20,'3m']],
          font: {
            color: '#999',
            size: 10
          }
        },
        xaxis: {
          show: false,
          mode: 'categories',
          tickColor: 'transparent',
          ticks: [[2,'5am'],[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'10am'],[8,'11am'],[9,'12nn'],[10,'1pm'],[11,'2pm'],[12,'3pm'],[13,'4pm']],
          font: {
            color: '#999',
            size: 9
          }
        }
      });
    }

    if($('#salesFlotChart').length) {
      $.plot('#salesFlotChart', [{
        data: [[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,10],[10,9],[11,12],[12,8],[13,10]],
        bars: {
          show: true,
          lineWidth: 0,
          fillColor: '#dee2e6',
          barWidth: .3,
          order: 'left'
        }
      },{
        data: [[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,10],[10,11],[11,3]],
        bars: {
          show: true,
          lineWidth: 0,
          fillColor: '#00BBE0',
          barWidth: .3,
          align: 'right'
        }
      }], {
        grid: {
          borderWidth: 0
        },
        yaxis: {
          min: 0,
          max: 15,
          tickColor: '#ddd',
          ticks: [[0,''],[5,'$500'],[10,'$1000'],[15,'$3000']],
          font: {
            color: '#444',
            size: 10
          }
        },
        xaxis: {
          mode: 'categories',
          tickColor: '#eee',
          ticks: [[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'1pm'],[8,'2pm'],[9,'3pm'],[10,'4pm'],[11,'5pm'],
        [12,'6pm'],[13,'7pm']],
          font: {
            color: '#999',
            size: 9
          }
        }
      });
    }

    if($('#salesFlotChartDark').length) {
      $.plot('#salesFlotChartDark', [{
        data: [[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,10],[10,9],[11,12],[12,8],[13,10]],
        bars: {
          show: true,
          lineWidth: 0,
          fillColor: '#54556a',
          barWidth: .3,
          order: 'left'
        }
      },{
        data: [[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,10],[10,11],[11,3]],
        bars: {
          show: true,
          lineWidth: 0,
          fillColor: '#00BBE0',
          barWidth: .3,
          align: 'right'
        }
      }], {
        grid: {
          borderWidth: 0
        },
        yaxis: {
          min: 0,
          max: 15,
          tickColor: '#2a2c40',
          ticks: [[0,''],[5,'$500'],[10,'$1000'],[15,'$3000']],
          font: {
            color: '#999',
            size: 10
          }
        },
        xaxis: {
          mode: 'categories',
          tickColor: '#2a2c40',
          ticks: [[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'1pm'],[8,'2pm'],[9,'3pm'],[10,'4pm'],[11,'5pm'],
        [12,'6pm'],[13,'7pm']],
          font: {
            color: '#999',
            size: 9
          }
        }
      });
    }

    if($('#visitorsFlotChart').length) {    
      $.plot('#visitorsFlotChart', [{
        data: [[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,12],[10,9],[11,12],[12,8],[13,5]],
        color: '#ced4da'
      },{
        data: [[1,0],[2,0],[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,9],[10,11],[11,5]],
        color: '#f10075'
      }], {
        series: {
          shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: 0.12 } ] }
          }
        },
        grid: {
          borderWidth: 0
        },
        yaxis: {
          min: 0,
          max: 15,
          tickColor: '#ddd',
          ticks: [[0,''],[5,'100K'],[10,'200K'],[15,'300K']],
          font: {
            color: '#444',
            size: 10
          }
        },
        xaxis: {
          mode: 'categories',
          tickColor: '#eee',
          ticks: [[2,'2am'],[3,'3am'],[4,'4am'],[5,'5am'],[6,'6am'],[7,'7am'],[8,'8am'],[9,'9am'],[10,'1pm'],[11,'2pm'],
        [12,'3pm'],[13,'4pm']],
          font: {
            color: '#999',
            size: 9
          }
        }
      });
    }

    if($('#visitorsFlotChartDark').length) { 
      $.plot('#visitorsFlotChartDark', 
      [{
        data: [[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,12],[10,9],[11,12],[12,8],[13,5]],
        color: '#ced4da'
      },
      {
        data: [[1,0],[2,0],[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,9],[10,11],[11,5]],
        color: '#f10075'
      }],
      {
        series: {
          shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: 0.12 } ] }
          }
        },
        grid: {
          borderWidth: 0
        },
        yaxis: {
          min: 0,
          max: 15,
          tickColor: '#2a2c40',
          ticks: [[0,''],[5,'100K'],[10,'200K'],[15,'300K']],
          font: {
            color: '#999',
            size: 10
          }
        },
        xaxis: {
          mode: 'categories',
          tickColor: '#2a2c40',
          ticks: [[2,'5am'],[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'10am'],[8,'11am'],[9,'12nn'],[10,'1pm'],[11,'2pm'],
        [12,'3pm'],[13,'4pm']],
          font: {
            color: '#999',
            size: 9
          }
        }
      });
    }

    if($('#sessionFlotChart').length) {
      $.plot('#sessionFlotChart', [{
        data: dashData3,
        color: '#00BBE0'
      },{
        data: dashData4,
        color: '#7571f9'
      },{
        data: dashData5,
        color: '#f10075'
      }], {
      series: {
        shadowSize: 0,
        lines: {
          show: true,
          lineWidth: 2,
          fill: false,
          fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
        }
      },
      grid: {
        borderWidth: 0,
        labelMargin: 20
      },
      yaxis: {
        show: false,
        min: 0,
        max: 100
      },
      xaxis: {
        show: true,
        color: 'rgba(0,0,0,.16)',
        ticks: [
          [0, ''],
          [10, '<span>Nov</span><span>05</span>'],
          [20, '<span>Nov</span><span>10</span>'],
          [30, '<span>Nov</span><span>15</span>'],
          [40, '<span>Nov</span><span>18</span>'],
          [50, '<span>Nov</span><span>22</span>'],
          [60, '<span>Nov</span><span>26</span>'],
          [70, '<span>Nov</span><span>30</span>'],
        ]
      }
    });
  }

  if($('#trafficFlotChart').length) {
    $.plot('#trafficFlotChart', [{
      data: dashData3,
      color: '#f10075'
      },{
        data: dashData4,
        color: '#7571f9'
      },{
        data: dashData5,
        color: '#00BBE0'
      }], {
      series: {
        shadowSize: 0,
        stack: true,
        bars: {
          show: true,
          lineWidth: 0,
          fill: 0.85
          //fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
        }
      },
      grid: {
        borderWidth: 0,
        labelMargin: 20
      },
      yaxis: {
        show: false,
        min: 0,
        max: 100
      },
      xaxis: {
        show: true,
        color: 'rgba(0,0,0,.16)',
        ticks: [
          [0, ''],
          [10, '<span>Nov</span><span>05</span>'],
          [20, '<span>Nov</span><span>10</span>'],
          [30, '<span>Nov</span><span>15</span>'],
          [40, '<span>Nov</span><span>18</span>'],
          [50, '<span>Nov</span><span>22</span>'],
          [60, '<span>Nov</span><span>26</span>'],
          [70, '<span>Nov</span><span>30</span>'],
        ]
      }
    });
  }

  if($('#vmap').length) {
    $('#vmap').vectorMap({
      map: 'world_en',
      showTooltip: true,
      backgroundColor: '#fff',
      color: '#ced4da',
      colors: {
        us: '#7571f9',
        gb: '#9d00cc',
        ru: 'rgba(5, 126, 255, 0.7)',
        // cn: '#00BBE0',
        // au: '#dfd3f2'
      },
      hoverColor: '#222',
      enableZoom: false,
      borderOpacity: .3,
      borderWidth: 3,
      borderColor: '#fff',
      hoverOpacity: .85
    });
  }

  if($('#vmapDark').length) {  
    $('#vmapDark').vectorMap({
      map: 'world_en',
      showTooltip: true,
      backgroundColor: '#',
      color: '#54556a',
      colors: {
        us: '#7571f9',
        gb: '#9d00cc',
        ru: 'rgba(5, 126, 255, 0.7)',
        // cn: '#00BBE0',
        // au: '#dfd3f2'
      },
      hoverColor: '#222',
      enableZoom: false,
      borderOpacity: .9,
      borderWidth: 1,
      borderColor: '#2a2c40',
      hoverOpacity: .85
    });
  }

  if($('.peity-donut').length) {
    $('.peity-donut').peity('donut');
  }

  if($('.peity-bar').length) {
    $('.peity-bar').peity('bar');
  }

  
  });
})(jQuery);