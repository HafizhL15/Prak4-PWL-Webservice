import React, { useState, useEffect } from "react";
import "./style.css";
import { Helmet, HelmetProvider } from "react-helmet-async";
import { Container, Row, Col } from "react-bootstrap";
import { meta } from "../../content_option";
import Project1 from '../../assets/Project1.jpg';
import Project2 from '../../assets/Project2.jpg';
import Project3 from '../../assets/Project3.jpg';
import Project4 from '../../assets/Project4.jpg';
import Project5 from '../../assets/Project5.jpg';
import Project6 from '../../assets/Project6.jpg';
import Project7 from '../../assets/Project7.jpg';
import Project8 from '../../assets/Project8.jpg';
import Project9 from '../../assets/Project9.jpg';

const projectArray = [
  {
    dekripsi: "Berlibur Ke Pantai",
    gambar: Project1,
    link: "#"
  },
  {
    dekripsi: "Memotret Matarahi Terbenam",
    gambar: Project2,
    link: "#"
  },
  {
    dekripsi: "Berjalan Di Atas ES",
    gambar: Project3,
    link: "#"
  },
  {
    dekripsi: "Melihat Lereng Gunung",
    gambar: Project4,
    link: "#"
  },
  {
    dekripsi: "Melihat Kebun Bunga",
    gambar: Project5,
    link: "#"
  },
  {
    dekripsi: "Memotret Sungai",
    gambar: Project6,
    link: "#",
  },
  {
    dekripsi: "Melihat Matahari Terbenam Di Lereng Gunung",
    gambar: Project7,
    link: "#"
  },
  {
    dekripsi: "Melihat Matahari Terbenam Di Pantai",
    gambar: Project8,
    link: "#"
  },
  {
    dekripsi: "Memotret Danau Di Sore Hari",
    gambar: Project9,
    link: "#"
  },
];

export const Portfolio = () => {
  // const [daftar] = useState(['Berlibur Ke Pantai','Memotret Matahari Terbenam','Berjalan Di Atas ES','Melihat Lereng Gunung','Melihat Kebun Bunga','Memotret Sungai','Melihat Matahari Terbenam Di Lereng Gunung','Melihat Matahari Terbenam Di Pantai']);
  // // const [images] = useState([require('../../assets/Project1.jpg'), require('../../assets/Project2.jpg'), require('../../assets/Project3.jpg'), require('../../assets/Project4.jpg'), require('../../assets/Project5.jpg'), require('../../assets/Project6.jpg'), require('../../assets/Project7.jpg'), require('../../assets/Project8.jpg')]);
  // const [images] = [{Project1}, {Project2}, {Project3}, {Project4}];
  
  const [project, setProject] = useState(projectArray);


  return (
    <HelmetProvider>
      <Container className="About-header">
        <Helmet>
          <meta charSet="utf-8" />
          <title> Portfolio | </title>{" "}
          <meta name="description" content={meta.description} />
        </Helmet>
        <Row className="mb-5 mt-3">
          <Col lg="8">
            <h1 className="display-4 mb-4"> Portfolio </h1>{" "}
            <hr className="t_border my-4 ml-0 text-left" />
          </Col>
        </Row>
        <div className="mb-5 po_items_ho">
          {project.map((data, index) => {
            return (
              <div key={index} className="po_item">
                <img src={data.gambar} alt="" height="320px" width="400px"/>
                <div className="content">
                  <p>{data.dekripsi}</p>
                  <a href={data.link}>View Project</a>
                </div>
              </div>
            );
          })}
        </div>
        
{/*         
        <div className="mb-5 po_items_ho">
          <div className="po_items">
            <img src={Project1} height="200px" width="300px" alt="" />
          </div>
          <div className="po_items">
            <img src={Project2} height="200px" width="300px" alt="" />
          </div>
          <div className="po_items">
            <img src={Project3} height="200px" width="300px" alt="" />
          </div>         
        </div> */}




        {/* <div className="mb-5 po_items_ho">
            <img></img>
             */}
            {/* {daftar.map((item, index) => (
                <div key={index} className="po_item">
                    <h4>Project {index + 1}</h4>
                    <img src={images[index]} alt="" />
                    <hr></hr>
                    <p>{item}</p>
                </div>
            ))} */}
        {/* </div> */}
        
      </Container>
    </HelmetProvider>
  );
};
/*        <div className="mb-5 po_items_ho">
          <div className="po_items">
            <img src={Project1} height="200px" width="300px" alt="" />
          </div>
          <div className="po_items">
            <img src={Project2} height="200px" width="300px" alt="" />
          </div>         
        </div>*/