<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="Provides customized and general URLs for specific OSG/WLCG Toolkits">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>




<!-- Site navigation menu -->



<title>OSG/WLCG perfSONAR Toolkit Info Page</title>
<header>
<a href="https://opensciencegrid.org/"><img style="float:left" src="img/osg_logo-600x380.png" alt="The OSG logo" width="150" height="95"></a>
<a href="http://wlcg.web.cern.ch/"><img style="float:right" align="top" src="img/WLCG-blackback-Logo-590x480.jpg" alt="The WLCG logo" width="150" height="95"></a>
<H2>The perfSONAR Toolkit Information Page</H2>
</header>

<nav>
<div class="navbar">
    <div class="form">
    <form action="/toolkitinfo/toolkitinfo.php" method="get">
             <label for="toolkits" style="color:white">Select toolkit: <input list="toolkits" name="toolkits" type="text"></label><input type="submit" value="Submit">

        <datalist id = "toolkits">
        <option value = ></option>
        <option value = alice14.spbu.ru>alice14.spbu.ru</option>
        <option value = atlas-bwctl.bu.edu>atlas-bwctl.bu.edu</option>
        <option value = atlas-npt1.bu.edu>atlas-npt1.bu.edu</option>
        <option value = atlas-npt2.bu.edu>atlas-npt2.bu.edu</option>
        <option value = atlas-owamp.bu.edu>atlas-owamp.bu.edu</option>
        <option value = atrogr007.nipne.ro>atrogr007.nipne.ro</option>
        <option value = atrogr009.nipne.ro>atrogr009.nipne.ro</option>
        <option value = bdw-utoronto.scinet.utoronto.ca>bdw-utoronto.scinet.utoronto.ca</option>
        <option value = btw-bw.grid.kiae.ru>btw-bw.grid.kiae.ru</option>
        <option value = btw-bw.t1.grid.kiae.ru>btw-bw.t1.grid.kiae.ru</option>
        <option value = btw-lat.grid.kiae.ru>btw-lat.grid.kiae.ru</option>
        <option value = btw-lat.t1.grid.kiae.ru>btw-lat.t1.grid.kiae.ru</option>
        <option value = ccperfsonar1.in2p3.fr>ccperfsonar1.in2p3.fr</option>
        <option value = ccperfsonar2.in2p3.fr>ccperfsonar2.in2p3.fr</option>
        <option value = clrperf-bwctl.in2p3.fr>clrperf-bwctl.in2p3.fr</option>
        <option value = clrperf-owamp.in2p3.fr>clrperf-owamp.in2p3.fr</option>
        <option value = cmsrm-perfsonar1.roma1.infn.it>cmsrm-perfsonar1.roma1.infn.it</option>
        <option value = dice-io-37-00.acrc.bris.ac.uk>dice-io-37-00.acrc.bris.ac.uk</option>
        <option value = ecs-80-158-24-202.reverse.open-telekom-cloud.com>ecs-80-158-24-202.reverse.open-telekom-cloud.com</option>
        <option value = epgperf.ph.bham.ac.uk>epgperf.ph.bham.ac.uk</option>
        <option value = fiona-r-uva.vlan7.uvalight.net>fiona-r-uva.vlan7.uvalight.net</option>
        <option value = grid251.kfki.hu>grid251.kfki.hu</option>
        <option value = grid252.kfki.hu>grid252.kfki.hu</option>
        <option value = grid-perf1.physik.rwth-aachen.de>grid-perf1.physik.rwth-aachen.de</option>
        <option value = grid-perf2.physik.rwth-aachen.de>grid-perf2.physik.rwth-aachen.de</option>
        <option value = grid-perfsonar.hpc.susx.ac.uk>grid-perfsonar.hpc.susx.ac.uk</option>
        <option value = gridpp-ps-band.ecdf.ed.ac.uk>gridpp-ps-band.ecdf.ed.ac.uk</option>
        <option value = gridpp-ps-lat.ecdf.ed.ac.uk>gridpp-ps-lat.ecdf.ed.ac.uk</option>
        <option value = hcc-ps01.unl.edu>hcc-ps01.unl.edu</option>
        <option value = hcc-ps02.unl.edu>hcc-ps02.unl.edu</option>
        <option value = heplnx129.pp.rl.ac.uk>heplnx129.pp.rl.ac.uk</option>
        <option value = heplnx130.pp.rl.ac.uk>heplnx130.pp.rl.ac.uk</option>
        <option value = hep-ps-bw-bp.pp.rl.ac.uk>hep-ps-bw-bp.pp.rl.ac.uk</option>
        <option value = hep-ps-lt-bp.pp.rl.ac.uk>hep-ps-lt-bp.pp.rl.ac.uk</option>
        <option value = hepsonar1.ph.liv.ac.uk>hepsonar1.ph.liv.ac.uk</option>
        <option value = hepsonar2.ph.liv.ac.uk>hepsonar2.ph.liv.ac.uk</option>
        <option value = hep-sonar.ecm.ub.es>hep-sonar.ecm.ub.es</option>
        <option value = ingrid-ps01.cism.ucl.ac.be>ingrid-ps01.cism.ucl.ac.be</option>
        <option value = ingrid-ps02.cism.ucl.ac.be>ingrid-ps02.cism.ucl.ac.be</option>
        <option value = iut2-net1.iu.edu>iut2-net1.iu.edu</option>
        <option value = iut2-net2.iu.edu>iut2-net2.iu.edu</option>
        <option value = iut2-net3.iu.edu>iut2-net3.iu.edu</option>
        <option value = iut2-net4.iu.edu>iut2-net4.iu.edu</option>
        <option value = iut2-net5.iu.edu>iut2-net5.iu.edu</option>
        <option value = iut2-net6.iu.edu>iut2-net6.iu.edu</option>
        <option value = iut2-net7.iu.edu>iut2-net7.iu.edu</option>
        <option value = iut2-net8.iu.edu>iut2-net8.iu.edu</option>
        <option value = lapp-ps01.in2p3.fr>lapp-ps01.in2p3.fr</option>
        <option value = lapp-ps02.in2p3.fr>lapp-ps02.in2p3.fr</option>
        <option value = lat-utoronto.scinet.utoronto.ca>lat-utoronto.scinet.utoronto.ca</option>
        <option value = lcg-bw.sfu.computecanada.ca>lcg-bw.sfu.computecanada.ca</option>
        <option value = lcg-lat.sfu.computecanada.ca>lcg-lat.sfu.computecanada.ca</option>
        <option value = lcgnetmon02.phy.bris.ac.uk>lcgnetmon02.phy.bris.ac.uk</option>
        <option value = lcgnetmon.phy.bris.ac.uk>lcgnetmon.phy.bris.ac.uk</option>
        <option value = lcgperfradar.dnp.fmph.uniba.sk>lcgperfradar.dnp.fmph.uniba.sk</option>
        <option value = lcgperf.shef.ac.uk>lcgperf.shef.ac.uk</option>
        <option value = lcgperfsonar.dnp.fmph.uniba.sk>lcgperfsonar.dnp.fmph.uniba.sk</option>
        <option value = lcgps01.gridpp.rl.ac.uk>lcgps01.gridpp.rl.ac.uk</option>
        <option value = lcgps02.gridpp.rl.ac.uk>lcgps02.gridpp.rl.ac.uk</option>
        <option value = lcg-psbw.uw.computecanada.ca>lcg-psbw.uw.computecanada.ca</option>
        <option value = lcg-pslat.uw.computecanada.ca>lcg-pslat.uw.computecanada.ca</option>
        <option value = lcg-sonar01.hep.ucl.ac.uk>lcg-sonar01.hep.ucl.ac.uk</option>
        <option value = lhc-bandwidth.twgrid.org>lhc-bandwidth.twgrid.org</option>
        <option value = lhcb-perf.nipne.ro>lhcb-perf.nipne.ro</option>
        <option value = lhc-latency.twgrid.org>lhc-latency.twgrid.org</option>
        <option value = lhcmon.bnl.gov>lhcmon.bnl.gov</option>
        <option value = lhcone-star-opt1.es.net>lhcone-star-opt1.es.net</option>
        <option value = lhcone.test.manlan.internet2.edu>lhcone.test.manlan.internet2.edu</option>
        <option value = lhcone.test.wix.internet2.edu>lhcone.test.wix.internet2.edu</option>
        <option value = lhcone-wash-opt1.es.net>lhcone-wash-opt1.es.net</option>
        <option value = lhcperfmon.bnl.gov>lhcperfmon.bnl.gov</option>
        <option value = llrpsonar1.in2p3.fr>llrpsonar1.in2p3.fr</option>
        <option value = llrpsonar2.in2p3.fr>llrpsonar2.in2p3.fr</option>
        <option value = lpnhe-psb.in2p3.fr>lpnhe-psb.in2p3.fr</option>
        <option value = lpnhe-psl.in2p3.fr>lpnhe-psl.in2p3.fr</option>
        <option value = lpsc-perfsonar2.in2p3.fr>lpsc-perfsonar2.in2p3.fr</option>
        <option value = lpsc-perfsonar.in2p3.fr>lpsc-perfsonar.in2p3.fr</option>
        <option value = lutps1.lunet.edu>lutps1.lunet.edu</option>
        <option value = lutps.lunet.edu>lutps.lunet.edu</option>
        <option value = marperf01.in2p3.fr>marperf01.in2p3.fr</option>
        <option value = marperf02.in2p3.fr>marperf02.in2p3.fr</option>
        <option value = mercury-1.lsr.nectec.or.th>mercury-1.lsr.nectec.or.th</option>
        <option value = mercury-2.lsr.nectec.or.th>mercury-2.lsr.nectec.or.th</option>
        <option value = mwt2-ps01.campuscluster.illinois.edu>mwt2-ps01.campuscluster.illinois.edu</option>
        <option value = mwt2-ps02.campuscluster.illinois.edu>mwt2-ps02.campuscluster.illinois.edu</option>
        <option value = mwt2-ps03.campuscluster.illinois.edu>mwt2-ps03.campuscluster.illinois.edu</option>
        <option value = mwt2-ps04.campuscluster.illinois.edu>mwt2-ps04.campuscluster.illinois.edu</option>
        <option value = nanperfs01.in2p3.fr>nanperfs01.in2p3.fr</option>
        <option value = nanperfs02.in2p3.fr>nanperfs02.in2p3.fr</option>
        <option value = netmon1.atlas-swt2.org>netmon1.atlas-swt2.org</option>
        <option value = netmon2.atlas-swt2.org>netmon2.atlas-swt2.org</option>
        <option value = nettest.lbl.gov>nettest.lbl.gov</option>
        <option value = osg.chic.nrp.internet2.edu>osg.chic.nrp.internet2.edu</option>
        <option value = osg.kans.nrp.internet2.edu>osg.kans.nrp.internet2.edu</option>
        <option value = osg.newy32aoa.nrp.internet2.edu>osg.newy32aoa.nrp.internet2.edu</option>
        <option value = p07383215f88745.cern.ch>p07383215f88745.cern.ch</option>
        <option value = pc138.physics.uoi.gr>pc138.physics.uoi.gr</option>
        <option value = perfbw.ciemat.es>perfbw.ciemat.es</option>
        <option value = perflat.ciemat.es>perflat.ciemat.es</option>
        <option value = perfmon.dur.scotgrid.ac.uk>perfmon.dur.scotgrid.ac.uk</option>
        <option value = perfson1.ppgrid1.rhul.ac.uk>perfson1.ppgrid1.rhul.ac.uk</option>
        <option value = perfson1.zeuthen.desy.de>perfson1.zeuthen.desy.de</option>
        <option value = perfson2.zeuthen.desy.de>perfson2.zeuthen.desy.de</option>
        <option value = perfsonar01.cmsaf.mit.edu>perfsonar01.cmsaf.mit.edu</option>
        <option value = PERFSONAR01.CMSAF.MIT.EDU>PERFSONAR01.CMSAF.MIT.EDU</option>
        <option value = perfsonar01.datagrid.cea.fr>perfsonar01.datagrid.cea.fr</option>
        <option value = perfsonar01.ft.uam.es>perfsonar01.ft.uam.es</option>
        <option value = perfsonar01.goegrid.gwdg.de>perfsonar01.goegrid.gwdg.de</option>
        <option value = perfsonar01.grid.cyfronet.pl>perfsonar01.grid.cyfronet.pl</option>
        <option value = perfsonar01.hephy.oeaw.ac.at>perfsonar01.hephy.oeaw.ac.at</option>
        <option value = perfsonar01.hep.wisc.edu>perfsonar01.hep.wisc.edu</option>
        <option value = perfsonar01-iep-grid.saske.sk>perfsonar01-iep-grid.saske.sk</option>
        <option value = perfsonar01.lcg.cscs.ch>perfsonar01.lcg.cscs.ch</option>
        <option value = perfsonar02.cmsaf.mit.edu>perfsonar02.cmsaf.mit.edu</option>
        <option value = PERFSONAR02.CMSAF.MIT.EDU>PERFSONAR02.CMSAF.MIT.EDU</option>
        <option value = perfsonar02.datagrid.cea.fr>perfsonar02.datagrid.cea.fr</option>
        <option value = perfsonar02.ft.uam.es>perfsonar02.ft.uam.es</option>
        <option value = perfsonar02.hephy.oeaw.ac.at>perfsonar02.hephy.oeaw.ac.at</option>
        <option value = perfsonar02.hep.wisc.edu>perfsonar02.hep.wisc.edu</option>
        <option value = perfsonar02-iep-grid.saske.sk>perfsonar02-iep-grid.saske.sk</option>
        <option value = perfsonar02.lcg.cscs.ch>perfsonar02.lcg.cscs.ch</option>
        <option value = perfsonar1.cc.kek.jp>perfsonar1.cc.kek.jp</option>
        <option value = perfsonar1.ebi.ac.uk>perfsonar1.ebi.ac.uk</option>
        <option value = perfsonar1.hep.kbfi.ee>perfsonar1.hep.kbfi.ee</option>
        <option value = perfsonar1.icepp.jp>perfsonar1.icepp.jp</option>
        <option value = perfsonar1.ihepa.ufl.edu>perfsonar1.ihepa.ufl.edu</option>
        <option value = perfsonar1.mi.infn.it>perfsonar1.mi.infn.it</option>
        <option value = perfsonar1.nipne.ro>perfsonar1.nipne.ro</option>
        <option value = perfsonar1.pi.infn.it>perfsonar1.pi.infn.it</option>
        <option value = perfsonar1.recas.ba.infn.it>perfsonar1.recas.ba.infn.it</option>
        <option value = perfsonar1.roma1.infn.it>perfsonar1.roma1.infn.it</option>
        <option value = perfsonar-1.t2.ucsd.edu>perfsonar-1.t2.ucsd.edu</option>
        <option value = perfsonar2.cc.kek.jp>perfsonar2.cc.kek.jp</option>
        <option value = perfsonar2-de-kit.gridka.de>perfsonar2-de-kit.gridka.de</option>
        <option value = perfsonar2-grid.uaic.ro>perfsonar2-grid.uaic.ro</option>
        <option value = perfsonar2.hep.kbfi.ee>perfsonar2.hep.kbfi.ee</option>
        <option value = perfsonar2.icepp.jp>perfsonar2.icepp.jp</option>
        <option value = perfsonar2.ihep.ac.cn>perfsonar2.ihep.ac.cn</option>
        <option value = perfsonar2.ihepa.ufl.edu>perfsonar2.ihepa.ufl.edu</option>
        <option value = perfsonar2.mi.infn.it>perfsonar2.mi.infn.it</option>
        <option value = perfsonar2.na.infn.it>perfsonar2.na.infn.it</option>
        <option value = perfsonar2.nipne.ro>perfsonar2.nipne.ro</option>
        <option value = perfsonar2.physics.science.az>perfsonar2.physics.science.az</option>
        <option value = perfsonar2.pi.infn.it>perfsonar2.pi.infn.it</option>
        <option value = perfsonar2.recas.ba.infn.it>perfsonar2.recas.ba.infn.it</option>
        <option value = perfsonar2.roma1.infn.it>perfsonar2.roma1.infn.it</option>
        <option value = perfsonar-2.t2.ucsd.edu>perfsonar-2.t2.ucsd.edu</option>
        <option value = perfsonar2.ultralight.org>perfsonar2.ultralight.org</option>
        <option value = perfsonar3.cc.kek.jp>perfsonar3.cc.kek.jp</option>
        <option value = perfsonar-40g.cscs.ch>perfsonar-40g.cscs.ch</option>
        <option value = perfsonar40-otc.hnsc.otc-service.com>perfsonar40-otc.hnsc.otc-service.com</option>
        <option value = perfsonar-alice.sut.ac.th>perfsonar-alice.sut.ac.th</option>
        <option value = perfsonar-b>perfsonar-b</option>
        <option value = perfsonar-bandwidth.esc.qmul.ac.uk>perfsonar-bandwidth.esc.qmul.ac.uk</option>
        <option value = perfsonar-bandwidth.grid.pub.ro>perfsonar-bandwidth.grid.pub.ro</option>
        <option value = perfsonar-bandwidth.grid.surfsara.nl>perfsonar-bandwidth.grid.surfsara.nl</option>
        <option value = perfsonar-b.ct.infn.it>perfsonar-b.ct.infn.it</option>
        <option value = perfsonar-bw.cern.ch>perfsonar-bw.cern.ch</option>
        <option value = perfsonar-bwctl.accre.vanderbilt.edu>perfsonar-bwctl.accre.vanderbilt.edu</option>
        <option value = perfsonar-bw.sprace.org.br>perfsonar-bw.sprace.org.br</option>
        <option value = perfsonar-bw.tier2.hep.manchester.ac.uk>perfsonar-bw.tier2.hep.manchester.ac.uk</option>
        <option value = perfsonar-cms1.itns.purdue.edu>perfsonar-cms1.itns.purdue.edu</option>
        <option value = perfsonar-cms2.itns.purdue.edu>perfsonar-cms2.itns.purdue.edu</option>
        <option value = perfsonar-cms-2.sc.chula.ac.th>perfsonar-cms-2.sc.chula.ac.th</option>
        <option value = perfsonar.cscs.ch>perfsonar.cscs.ch</option>
        <option value = perfsonar-de-kit.gridka.de>perfsonar-de-kit.gridka.de</option>
        <option value = perfsonar-fra-1.exoscale.ch>perfsonar-fra-1.exoscale.ch</option>
        <option value = perfsonar-grid.uaic.ro>perfsonar-grid.uaic.ro</option>
        <option value = perfsonar-gva-1.exoscale.ch>perfsonar-gva-1.exoscale.ch</option>
        <option value = perfsonar.hpc.is>perfsonar.hpc.is</option>
        <option value = perfsonar.ihep.ac.cn>perfsonar.ihep.ac.cn</option>
        <option value = perfsonar-l>perfsonar-l</option>
        <option value = perfsonar-latency.esc.qmul.ac.uk>perfsonar-latency.esc.qmul.ac.uk</option>
        <option value = perfsonar-latency.grid.pub.ro>perfsonar-latency.grid.pub.ro</option>
        <option value = perfsonar-latency.grid.surfsara.nl>perfsonar-latency.grid.surfsara.nl</option>
        <option value = perfsonar-l.ct.infn.it>perfsonar-l.ct.infn.it</option>
        <option value = perfsonar-lt.cern.ch>perfsonar-lt.cern.ch</option>
        <option value = perfsonar-lt.sprace.org.br>perfsonar-lt.sprace.org.br</option>
        <option value = perfsonar-lt.tier2.hep.manchester.ac.uk>perfsonar-lt.tier2.hep.manchester.ac.uk</option>
        <option value = perfsonar.na.infn.it>perfsonar.na.infn.it</option>
        <option value = perfsonar.nersc.gov>perfsonar.nersc.gov</option>
        <option value = perfsonar-owamp.accre.vanderbilt.edu>perfsonar-owamp.accre.vanderbilt.edu</option>
        <option value = perfsonar-ow.cnaf.infn.it>perfsonar-ow.cnaf.infn.it</option>
        <option value = perfsonar.physics.science.az>perfsonar.physics.science.az</option>
        <option value = perfsonar.pleiades.uni-wuppertal.de>perfsonar.pleiades.uni-wuppertal.de</option>
        <option value = perfsonar.pnpi.nw.ru>perfsonar.pnpi.nw.ru</option>
        <option value = perfsonar-ps-01.desy.de>perfsonar-ps-01.desy.de</option>
        <option value = perfsonar-ps-02.desy.de>perfsonar-ps-02.desy.de</option>
        <option value = perfsonar-ps-03.desy.de>perfsonar-ps-03.desy.de</option>
        <option value = perfsonar-ps-04.desy.de>perfsonar-ps-04.desy.de</option>
        <option value = perfsonar-ps2.ndgf.org>perfsonar-ps2.ndgf.org</option>
        <option value = perfsonar-ps-bandwidth.igfae.usc.es>perfsonar-ps-bandwidth.igfae.usc.es</option>
        <option value = perfsonar-ps.cnaf.infn.it>perfsonar-ps.cnaf.infn.it</option>
        <option value = perfsonar-ps-latency.igfae.usc.es>perfsonar-ps-latency.igfae.usc.es</option>
        <option value = perfsonar-ps.ndgf.org>perfsonar-ps.ndgf.org</option>
        <option value = perfsonar-test1.kek.jp>perfsonar-test1.kek.jp</option>
        <option value = perfsonar-test2.kek.jp>perfsonar-test2.kek.jp</option>
        <option value = perfsonar-test3.kek.jp>perfsonar-test3.kek.jp</option>
        <option value = perfsonar.ultralight.org>perfsonar.ultralight.org</option>
        <option value = perfsonar.unl.edu>perfsonar.unl.edu</option>
        <option value = ps0001.m45.ihep.su>ps0001.m45.ihep.su</option>
        <option value = ps0002.m45.ihep.su>ps0002.m45.ihep.su</option>
        <option value = ps001.gla.scotgrid.ac.uk>ps001.gla.scotgrid.ac.uk</option>
        <option value = ps002.gla.scotgrid.ac.uk>ps002.gla.scotgrid.ac.uk</option>
        <option value = ps01.bfg.uni-freiburg.de>ps01.bfg.uni-freiburg.de</option>
        <option value = ps01.cat.cbpf.br>ps01.cat.cbpf.br</option>
        <option value = ps01.iihe.ac.be>ps01.iihe.ac.be</option>
        <option value = ps01-l.farm.particle.cz>ps01-l.farm.particle.cz</option>
        <option value = ps-01.lnl.infn.it>ps-01.lnl.infn.it</option>
        <option value = ps01.ncg.ingrid.pt>ps01.ncg.ingrid.pt</option>
        <option value = ps02-b.farm.particle.cz>ps02-b.farm.particle.cz</option>
        <option value = ps02.bfg.uni-freiburg.de>ps02.bfg.uni-freiburg.de</option>
        <option value = ps02.cat.cbpf.br>ps02.cat.cbpf.br</option>
        <option value = ps02.iihe.ac.be>ps02.iihe.ac.be</option>
        <option value = ps-02.lnl.infn.it>ps-02.lnl.infn.it</option>
        <option value = ps02.ncg.ingrid.pt>ps02.ncg.ingrid.pt</option>
        <option value = ps1.kipt.kharkov.ua>ps1.kipt.kharkov.ua</option>
        <option value = ps1.ochep.ou.edu>ps1.ochep.ou.edu</option>
        <option value = ps2.kipt.kharkov.ua>ps2.kipt.kharkov.ua</option>
        <option value = ps2.lhcopn-ps.surfsara.nl>ps2.lhcopn-ps.surfsara.nl</option>
        <option value = ps2.ochep.ou.edu>ps2.ochep.ou.edu</option>
        <option value = ps2.truba.gov.tr>ps2.truba.gov.tr</option>
        <option value = ps3.ochep.ou.edu>ps3.ochep.ou.edu</option>
        <option value = psaanl.yerphi-cluster.grid.am>psaanl.yerphi-cluster.grid.am</option>
        <option value = psb01.pic.es>psb01.pic.es</option>
        <option value = ps-bandwidth.atlas.unimelb.edu.au>ps-bandwidth.atlas.unimelb.edu.au</option>
        <option value = ps-bandwidth.clumeq.mcgill.ca>ps-bandwidth.clumeq.mcgill.ca</option>
        <option value = ps-bandwidth.hepnetcanada.ca>ps-bandwidth.hepnetcanada.ca</option>
        <option value = ps-bandwidth.hep.pnnl.gov>ps-bandwidth.hep.pnnl.gov</option>
        <option value = ps-bandwidth.lhcmon.triumf.ca>ps-bandwidth.lhcmon.triumf.ca</option>
        <option value = ps-bandwidth.sfu.westgrid.ca>ps-bandwidth.sfu.westgrid.ca</option>
        <option value = psb.hpc.utfsm.cl>psb.hpc.utfsm.cl</option>
        <option value = psb-ifae.pic.es>psb-ifae.pic.es</option>
        <option value = psbud01.kfki.hu>psbud01.kfki.hu</option>
        <option value = psbud02.kfki.hu>psbud02.kfki.hu</option>
        <option value = ps-development.bnl.gov>ps-development.bnl.gov</option>
        <option value = psfrascati01.lnf.infn.it>psfrascati01.lnf.infn.it</option>
        <option value = psfrascati02.lnf.infn.it>psfrascati02.lnf.infn.it</option>
        <option value = ps-gsdc01.sdfarm.kr>ps-gsdc01.sdfarm.kr</option>
        <option value = ps-gsdc02.sdfarm.kr>ps-gsdc02.sdfarm.kr</option>
        <option value = pship01.csc.fi>pship01.csc.fi</option>
        <option value = pship02.csc.fi>pship02.csc.fi</option>
        <option value = psifca01.ifca.es>psifca01.ifca.es</option>
        <option value = psifca02.ifca.es>psifca02.ifca.es</option>
        <option value = psific01.ific.uv.es>psific01.ific.uv.es</option>
        <option value = psific02.ific.uv.es>psific02.ific.uv.es</option>
        <option value = psl01.pic.es>psl01.pic.es</option>
        <option value = ps-latency.atlas.unimelb.edu.au>ps-latency.atlas.unimelb.edu.au</option>
        <option value = ps-latency.clumeq.mcgill.ca>ps-latency.clumeq.mcgill.ca</option>
        <option value = ps-latency.hepnetcanada.ca>ps-latency.hepnetcanada.ca</option>
        <option value = ps-latency.hep.pnnl.gov>ps-latency.hep.pnnl.gov</option>
        <option value = ps-latency.lhcmon.triumf.ca>ps-latency.lhcmon.triumf.ca</option>
        <option value = ps.lhcopn-ps.surfsara.nl>ps.lhcopn-ps.surfsara.nl</option>
        <option value = psl.hpc.utfsm.cl>psl.hpc.utfsm.cl</option>
        <option value = psl-ifae.pic.es>psl-ifae.pic.es</option>
        <option value = ps-londhx1.ja.net>ps-londhx1.ja.net</option>
        <option value = ps-londhx1-mgmt.ja.net>ps-londhx1-mgmt.ja.net</option>
        <option value = psmsu01.aglt2.org>psmsu01.aglt2.org</option>
        <option value = psmsu02.aglt2.org>psmsu02.aglt2.org</option>
        <option value = psmsu05.aglt2.org>psmsu05.aglt2.org</option>
        <option value = psmsu06.aglt2.org>psmsu06.aglt2.org</option>
        <option value = ps.ncp.edu.pk>ps.ncp.edu.pk</option>
        <option value = psnr-farm04.slac.stanford.edu>psnr-farm04.slac.stanford.edu</option>
        <option value = psnr-farm10.slac.stanford.edu>psnr-farm10.slac.stanford.edu</option>
        <option value = psonar1.lal.in2p3.fr>psonar1.lal.in2p3.fr</option>
        <option value = psonar2.lal.in2p3.fr>psonar2.lal.in2p3.fr</option>
        <option value = psonar3.fnal.gov>psonar3.fnal.gov</option>
        <option value = psonar4.fnal.gov>psonar4.fnal.gov</option>
        <option value = psonar-bwctl.brazos.tamu.edu>psonar-bwctl.brazos.tamu.edu</option>
        <option value = psonar.cis.gov.pl>psonar.cis.gov.pl</option>
        <option value = psonar-owamp.brazos.tamu.edu>psonar-owamp.brazos.tamu.edu</option>
        <option value = psonartest1.fnal.gov>psonartest1.fnal.gov</option>
        <option value = psonartest2.fnal.gov>psonartest2.fnal.gov</option>
        <option value = ps.truba.gov.tr>ps.truba.gov.tr</option>
        <option value = psum01.aglt2.org>psum01.aglt2.org</option>
        <option value = psum01.itep.ru>psum01.itep.ru</option>
        <option value = psum02.aglt2.org>psum02.aglt2.org</option>
        <option value = psum02.itep.ru>psum02.itep.ru</option>
        <option value = psum05.aglt2.org>psum05.aglt2.org</option>
        <option value = psum06.aglt2.org>psum06.aglt2.org</option>
        <option value = psuta01.atlas-swt2.org>psuta01.atlas-swt2.org</option>
        <option value = psuta02.atlas-swt2.org>psuta02.atlas-swt2.org</option>
        <option value = pygrid-sonar1.lancs.ac.uk>pygrid-sonar1.lancs.ac.uk</option>
        <option value = pygrid-sonar2.lancs.ac.uk>pygrid-sonar2.lancs.ac.uk</option>
        <option value = repos.indiacms.res.in>repos.indiacms.res.in</option>
        <option value = sampaps01.if.usp.br>sampaps01.if.usp.br</option>
        <option value = sampaps02.if.usp.br>sampaps02.if.usp.br</option>
        <option value = sbgperfps1.in2p3.fr>sbgperfps1.in2p3.fr</option>
        <option value = sbgperfps2.in2p3.fr>sbgperfps2.in2p3.fr</option>
        <option value = serv04.hep.phy.cam.ac.uk>serv04.hep.phy.cam.ac.uk</option>
        <option value = sonar1.itim-cj.ro>sonar1.itim-cj.ro</option>
        <option value = sonar2.itim-cj.ro>sonar2.itim-cj.ro</option>
        <option value = stashcache.t2.ucsd.edu>stashcache.t2.ucsd.edu</option>
        <option value = t1-pfsn1.jinr-t1.ru>t1-pfsn1.jinr-t1.ru</option>
        <option value = t1-pfsn2.jinr-t1.ru>t1-pfsn2.jinr-t1.ru</option>
        <option value = t2-pfsn1.jinr.ru>t2-pfsn1.jinr.ru</option>
        <option value = t2-pfsn2.jinr.ru>t2-pfsn2.jinr.ru</option>
        <option value = t2ps-bandwidth.physics.ox.ac.uk>t2ps-bandwidth.physics.ox.ac.uk</option>
        <option value = t2ps-latency.physics.ox.ac.uk>t2ps-latency.physics.ox.ac.uk</option>
        <option value = tau.ijs.si>tau.ijs.si</option>
        <option value = tech-ps.hep.technion.ac.il>tech-ps.hep.technion.ac.il</option>
        <option value = uct2-net1.mwt2.org>uct2-net1.mwt2.org</option>
        <option value = uct2-net2.mwt2.org>uct2-net2.mwt2.org</option>
        <option value = uct2-net3.mwt2.org>uct2-net3.mwt2.org</option>
        <option value = uct2-net4.mwt2.org>uct2-net4.mwt2.org</option>
        <option value = v004.pnpi.nw.ru>v004.pnpi.nw.ru</option>
       </datalist>
    </form>
  </div>

  <div class="dropdown">
  <button class="dropbtn" onclick="pSPipelineFunc()">OSG Network Pipeline
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="pSPipeline">
    <a href="https://gracc.opensciencegrid.org/dashboard/db/perfsonar-collector?orgId=1">perfSONAR Collector Monitoring</a>
    <a href="http://atlas-kibana.mwt2.org:5601/app/kibana#/visualize/edit/58bf3e80-18d1-11e8-8f2f-ab6704660c79?_g=(refreshInterval:(display:Off,pause:!f,value:0),time:(from:now-7d,interval:auto,mode:quick,timezone:UTC,to:now))&_a=(filters:!(),linked:!f,query:(language:lucene,query:(match_all:())),uiState:(),vis:(aggs:!(),params:(expression:'.es(index%3D!'ps_owd!',%20q%3D!'*!').label(!'OWD!'),%20.es(index%3D!'ps_throughput!',%20q%3D!'*!').label(!'throughput!').yaxis(2),%20.es(index%3D!'ps_meta!',%20q%3D!'*!').label(!'metadata!').yaxis(2),%20.es(index%3D!'ps_status!',%20q%3D!'*!').label(!'status!').yaxis(2),%20.es(index%3D!'ps_trace!',%20q%3D!'*!').label(!'traceroute!'),%20.es(index%3D!'ps_packet_loss!',%20q%3D!'*!').label(!'packet%20loss!'),%0A.es(index%3D!'ps_retransmits!',%20q%3D!'*!').label(!'retransmits!').yaxis(2)',interval:auto,type:timelion),title:'PerfSONAR%20ingest',type:timelion))">perfSONAR Ingest Rate</a>
    <a href="https://psetf.opensciencegrid.org/etf/check_mk/index.py?start_url=%2Fetf%2Fcheck_mk%2Fview.py%3Faggr_group%3DOSG%2520Network%2520ITB%2520Servers%26view_name%3Daggr_group">Status of ITB Services</a>
    <a href="https://psetf.opensciencegrid.org/etf/check_mk/index.py?start_url=%2Fetf%2Fcheck_mk%2Fview.py%3Faggr_group%3DOSG%2520Production%2520Network%2520Services%26view_name%3Daggr_group">Status of Production Services</a>
  </div>
  </div> 

  <div class="dropdown">
  <button class="dropbtn" onclick="pSAlarmsFunc()">Pipeline Alarms
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="pSAlarms">
    <a href="http://atlas-kibana.mwt2.org:5601/app/kibana#/visualize/edit/Perfsonar-alarms-bad-packet-loss-table?_g=(refreshInterval:(pause:!t,value:0),time:(from:now-24h,mode:quick,to:now))&_a=(filters:!(),linked:!f,query:(language:lucene,query:(query_string:(analyze_wildcard:!t,lowercase_expanded_terms:!f,query:'*'))),uiState:(vis:(params:(sort:(columnIndex:4,direction:desc)))),vis:(aggs:!((enabled:!t,id:'1',params:(),schema:metric,type:count),(enabled:!t,id:'2',params:(field:srcSite,missingBucket:!f,missingBucketLabel:Missing,order:desc,orderBy:'1',otherBucket:!f,otherBucketLabel:Other,size:500),schema:bucket,type:terms),(enabled:!t,id:'3',params:(field:measurements),schema:metric,type:avg),(enabled:!t,id:'4',params:(field:packetLossAvg),schema:metric,type:avg),(enabled:!t,id:'5',params:(field:src,missingBucket:!f,missingBucketLabel:Missing,order:desc,orderBy:'4',otherBucket:!f,otherBucketLabel:Other,size:50),schema:bucket,type:terms)),params:(perPage:25,showMetricsAtAllLevels:!f,showPartialRows:!f,showTotal:!t,sort:(columnIndex:4,direction:desc),totalFunc:avg),title:'Perfsonar%20alarms%20-%20bad%20packet%20loss%20-%20table',type:table))">Packet Loss Alarms by Src</a>
    <a href="http://atlas-kibana.mwt2.org:5601/app/kibana#/visualize/edit/Perfsonar-alarms-bad-packet-loss-table?_g=(refreshInterval:(pause:!t,value:0),time:(from:now-24h,mode:quick,to:now))&_a=(filters:!(),linked:!f,query:(language:lucene,query:(query_string:(analyze_wildcard:!t,lowercase_expanded_terms:!f,query:'*'))),uiState:(vis:(params:(sort:(columnIndex:4,direction:desc)))),vis:(aggs:!((enabled:!t,id:'1',params:(),schema:metric,type:count),(enabled:!t,id:'2',params:(field:destSite,missingBucket:!f,missingBucketLabel:Missing,order:desc,orderBy:'1',otherBucket:!f,otherBucketLabel:Other,size:500),schema:bucket,type:terms),(enabled:!t,id:'3',params:(field:measurements),schema:metric,type:avg),(enabled:!t,id:'4',params:(field:packetLossAvg),schema:metric,type:avg),(enabled:!t,id:'5',params:(field:dest,missingBucket:!f,missingBucketLabel:Missing,order:desc,orderBy:'4',otherBucket:!f,otherBucketLabel:Other,size:50),schema:bucket,type:terms)),params:(perPage:25,showMetricsAtAllLevels:!f,showPartialRows:!f,showTotal:!t,sort:(columnIndex:4,direction:desc),totalFunc:avg),title:'Perfsonar%20alarms%20-%20bad%20packet%20loss%20-%20table',type:table))">Packet Loss Alarms by Dest</a>
    <a href="http://atlas-kibana.mwt2.org:5601/app/kibana#/visualize/edit/Perfsonar-alarms-bad-packet-loss-sources?_g=(refreshInterval:(pause:!t,value:0),time:(from:now-30d,mode:quick,to:now))&_a=(filters:!(),linked:!f,query:(language:lucene,query:(query_string:(analyze_wildcard:!t,lowercase_expanded_terms:!f,query:'*'))),uiState:(),vis:(aggs:!((enabled:!t,id:'1',params:(),schema:metric,type:count),(enabled:!t,id:'2',params:(customInterval:'2h',drop_partials:!f,extended_bounds:(),field:alarmTime,interval:auto,min_doc_count:1,time_zone:UCT,useNormalizedEsInterval:!t),schema:segment,type:date_histogram),(enabled:!t,id:'3',params:(field:srcSite,missingBucket:!f,missingBucketLabel:Missing,order:desc,orderBy:'1',otherBucket:!f,otherBucketLabel:Other,size:20),schema:group,type:terms)),params:(addLegend:!t,addTimeMarker:!f,addTooltip:!t,categoryAxes:!((id:CategoryAxis-1,labels:(show:!t,truncate:100),position:bottom,scale:(type:linear),show:!t,style:(),title:(),type:category)),defaultYExtents:!f,grid:(categoryLines:!f,style:(color:%23eee)),legendPosition:right,mode:stacked,scale:linear,seriesParams:!((data:(id:'1',label:Count),mode:stacked,show:true,type:histogram,valueAxis:ValueAxis-1)),setYExtents:!f,shareYAxis:!t,times:!(),type:histogram,valueAxes:!((id:ValueAxis-1,labels:(filter:!f,rotate:0,show:!t,truncate:100),name:LeftAxis-1,position:left,scale:(defaultYExtents:!f,mode:normal,setYExtents:!f,type:linear),show:!t,style:(),title:(text:Count),type:value)),yAxis:()),title:'Perfsonar%20alarms%20-%20bad%20packet%20loss%20-%20sources',type:histogram))">Packet Loss BarGraph by Src</a>
    <a href="http://atlas-kibana.mwt2.org:5601/app/kibana#/visualize/edit/Perfsonar-alarms-bad-packet-loss-destinations?_g=(refreshInterval:(pause:!t,value:0),time:(from:now-30d,mode:quick,to:now))&_a=(filters:!(),linked:!f,query:(language:lucene,query:(query_string:(analyze_wildcard:!t,lowercase_expanded_terms:!f,query:'*'))),uiState:(),vis:(aggs:!((enabled:!t,id:'1',params:(),schema:metric,type:count),(enabled:!t,id:'2',params:(customInterval:'2h',drop_partials:!f,extended_bounds:(),field:alarmTime,interval:auto,min_doc_count:1,time_zone:UCT,useNormalizedEsInterval:!t),schema:segment,type:date_histogram),(enabled:!t,id:'3',params:(field:destSite,missingBucket:!f,missingBucketLabel:Missing,order:desc,orderBy:'1',otherBucket:!f,otherBucketLabel:Other,size:20),schema:group,type:terms)),params:(addLegend:!t,addTimeMarker:!f,addTooltip:!t,categoryAxes:!((id:CategoryAxis-1,labels:(show:!t,truncate:100),position:bottom,scale:(type:linear),show:!t,style:(),title:(),type:category)),defaultYExtents:!f,grid:(categoryLines:!f,style:(color:%23eee)),legendPosition:right,mode:stacked,scale:linear,seriesParams:!((data:(id:'1',label:Count),mode:stacked,show:true,type:histogram,valueAxis:ValueAxis-1)),setYExtents:!f,shareYAxis:!t,times:!(),type:histogram,valueAxes:!((id:ValueAxis-1,labels:(filter:!f,rotate:0,show:!t,truncate:100),name:LeftAxis-1,position:left,scale:(defaultYExtents:!f,mode:normal,setYExtents:!f,type:linear),show:!t,style:(),title:(text:Count),type:value)),yAxis:()),title:'Perfsonar%20alarms%20-%20bad%20packet%20loss%20-%20destinations',type:histogram))">Packet Loss BarGraph by Dest</a>
  </div>
  </div> 

  <div class="dropdown">
  <button class="dropbtn" onclick="pSDocsFunc()">Documentation 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="pSDocs">
      <a href="https://opensciencegrid.org/networking/">OSG Networking Area Documentation</a>
      <a href="https://docs.perfsonar.net/">perfSONAR Toolkit Documentation</a>
    </div>
  </div>

  <div class="dropdown">
  <button class="dropbtn" onclick="pSServicesFunc()">OSG Network Services 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="pSServices">
      <a href="https://psmad.opensciencegrid.org/maddash-webui/index.cgi">OSG//WLCG MaDDash</a>   
      <a href="https://psconfig.opensciencegrid.org/">OSG/WLCG pSConfig (PWA)</a>
    </div>
  </div>


</div>
Your selected perfSONAR Toolkit is: <b><?php echo $_GET["toolkits"]; ?></b>
</nav>

<div class="flex-container" style="min-height: 200px;">
 <div>
<iframe id="ifr" name="ifr" style="float:right" src="https://psetf.opensciencegrid.org/etf/check_mk/view.py?filled_in=filter&host_regex=<?php echo $_GET["toolkits"]; ?>&selection=ff14182e-35bd-412e-a95a-526b80959b00&view_name=searchhost" height="220" width="500"></iframe><br>
 </div>

 <div style="min-height: 200px;left-margin: 10px">
Customized Web links for <b><?php echo $_GET["toolkits"]; ?><b><br>

<a href="https://<?php echo $_GET["toolkits"]; ?>/toolkit">This toolkit's web interface</a><br>
<a href="https://psetf.opensciencegrid.org/etf/check_mk/index.py?start_url=%2Fetf%2Fcheck_mk%2Fview.py%3Fhost%3D<?php echo $_GET["toolkits"]; ?>%26site%3Detf%26view_name%3Dhost">Monitoring of this toolkit's services/configuration</a><br>
<a href="http://psconfig.opensciencegrid.org/pub/auto/<?php echo $_GET["toolkits"]; ?>">Testing insructions for this toolkit (JSON)</a><br>
<a href="https://<?php echo $_GET["toolkits"]; ?>/toolkit/services/host.cgi?method=get_summary">This toolkit's settings and status</a><br>

 </div>

</div>

  <footer>
        <a href="https://iris-hep.org/"><img src="img/Iris-hep-6-WHITE-complete.png" alt="The IRIS-HEP logo" width="200" height="80"></a>
        <a href="https://www.nsf.gov/"><img src="img/nsf_round_logo.png" alt="The NSF logo" width="95" height="95"></a>
  </footer>
  <center>
        <a style="padding: 10px 0px;" href="mailto:wlcg-perfsonar-support@cern.ch?subject=ToolkitInfoFeedback">Contact us about this webpage</a>
  </center>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-136181829-1', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
