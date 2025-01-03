import React, { useState } from 'react';
import './App.css';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom'; // Import de Routes au lieu de Switch

import Login from './auth/Login';
import Films from './films/Films'
import FilmDetails from './films/FilmDetails';
import FilmEdit from './films/FilmEdit';



const App = () => {

  return (
    <Router>
      <Routes>
        {/* Route pour la page de connexion */}
        <Route path="/" element={<Login />} />

        {/* Route pour la liste des films */}
        <Route path="/films" element={<Films />} />

        {/* Route pour la page de détails d'un film */}
        <Route path="/films/:id" element={<FilmDetails />} />

        {/* Route pour la éditer un film */}
        <Route path="/films/:id/edit" element={<FilmEdit />} />

      </Routes>
    </Router>
  );
};

export default App;
