function showTrain() {
    document.getElementById("train_tab").style.backgroundColor= "#ffdbf4";
    document.getElementById("train_tab").style.fontStyle = "normal";

    document.getElementById("exp_tab").style.backgroundColor = "#e0b1cb";
    document.getElementById("exp_tab").style.fontStyle= "italic";

    const section = document.getElementById("experience_section");

    section.innerHTML = ''
    section.innerHTML = `
                <span class="title">Academic training</span>

                <div class="full_description">
                    <span class="description_detail">CESI Ecole d'ingénieurs : </span>
                    <ul class="description_detail">
                        <span class="sub_title">Computer Science Enginnering</span>
                        <li>5 years academic training in computer science</li>
                        <li>Graduating with a Computer Science Engineer Diploma</li>
                        <li>Completed two years of preparatory classes and in the process of completing my 3rd year</li>
                    </ul>
                    <span class="description_detail">Graduating in 2027</span>
                </div>
                <hr>

                <div class="full_description">
                    <span class="description_detail">Institution Ste Jeanne d'Arc : </span>
                    <ul class="description_detail">
                        <span class="sub_title">Highschool Graduation (Baccalauréat)</span>
                        <li>Graduated with the highest mention</li>
                        <li>Specializing in Mathematics, Computer Science, Physics and Chemistry</li>
                    </ul>
                    <span class="description_detail">June 2022</span>
                </div>
                        
                                                `;

  }
  
  function showExp() {
    document.getElementById("exp_tab").style.backgroundColor = "#ffdbf4";
    document.getElementById("exp_tab").style.fontStyle= "normal";
    //document.getElementById("closed_nav").style.width = "50px";

    document.getElementById("train_tab").style.backgroundColor = "#e0b1cb";
    document.getElementById("train_tab").style.fontStyle= "italic";

    const section = document.getElementById("experience_section");

    section.innerHTML = ''
    section.innerHTML = `
                <span class="title">Professional experiences</span>

                <div class="full_description">
                    <span class="description_detail">Corteva Agriscience : </span>
                    <ul class="description_detail">
                        <span class="sub_title">Application Development Intern</span>
                        <li>Develop a set of applications for optimized production and operators' efficiency with the aim of transitionning to a "4.0 Industry"</li>
                        <li>(PowerApps, PowerAutomate, PowerBi, Python)</li>
                    </ul>
                    <span class="description_detail">January-April 2025</span>
                </div>
                <hr>
                <div class="full_description">
                    <span class="description_detail">Dalim Software : </span>
                    <ul class="description_detail">
                        <span class="sub_title">R&D Intern</span>
                        <li>Set up automated tests for a web application in development</li>
                        <li>(Robot Framework, Selenium, Python, GraphQL)</li>
                    </ul>
                    <span class="description_detail">April-July 2024</span>
                </div>

                <hr>
                <span class="title">Other experiences</span>
                <div class="full_description">
                    <span class="description_detail">Festival Décibulles</span>
                    <ul class="description_detail">
                        <span class="sub_title">Barmaid at a festival : </span>
                        <li>Taking and preparing commands and welcoming clients</li>
                    </ul>
                    <span class="description_detail">July 2023 & 2024</span>
                </div>

                <hr>
                <div class="full_description">
                    <span class="description_detail">PiscinEtienne</span>
                    <ul class="description_detail">
                        <span class="sub_title">Assistant pool construction and maintenance : </span>
                        <li>Assisting on construction and maintenance tasks</li>
                    </ul>
                    <span class="description_detail">June 2023</span>
                </div>
                <hr>
                <div class="full_description">
                    <span class="description_detail">Mairie de Mulhouse</span>
                    <ul class="description_detail">
                        <span class="sub_title">Assistant gardener : </span>
                        <li>Assisting employees on gardenin tasks</li>
                    </ul>
                    <span class="description_detail">June 2022</span>
                </div>
                        
                                                `;
  }