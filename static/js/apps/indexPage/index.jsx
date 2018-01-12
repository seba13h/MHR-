import React, { Component } from 'react';
import Footer from '../component/footer';
import NavBar from '../component/navsBar';

class Index extends Component {
    render() {
        return (
            <div>
                <div id="wrapper" className="col-md-12">
                    <div id="header-zone">

                    </div>
                    <div id="middle-zone">
                        <div className="cont-navBar">
                        <NavBar/>
                        </div>
                        <div id="carouselExampleControls" className="carousel slide" data-ride="carousel">
                            <div className="carousel-inner">
                                <div className="carousel-item active">
                                    <img className="d-block img-carousel" src="./static/img/seguridad-informatica modal-index.jpg" alt="First slide" />
                                </div>
                                 <div className="carousel-item">
                                    <img className="d-block img-carousel"  src="./static/img/seguridad-informatica modal-index2.jpg" alt="Second slide" />
                                </div>
                                <div className="carousel-item">
                                    <img className="d-block img-carousel"  src="./static/img/seguridad-informatica modal-index3.jpg" alt="Third slide" />
                                </div>
                            </div>
                            <a className="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span className="sr-only">Previous</span>
                            </a>
                            <a className="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span className="carousel-control-next-icon" aria-hidden="true"></span>
                                <span className="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div id="footer-zone">
                        <Footer typeFooter={'2'} />
                    </div>

                </div>
            </div>
        )
    }
};
export default Index;