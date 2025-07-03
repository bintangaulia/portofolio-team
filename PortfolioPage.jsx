import React, { useState } from 'react';
import EditPortfolio from './EditPortfolio';

const PortfolioPage = () => {
  const [showEdit, setShowEdit] = useState(false);
  const [image, setImage] = useState('url_image_awal.jpg'); // ganti dengan state/image dari backend
  const [description, setDescription] = useState('Deskripsi awal'); // ganti dengan state dari backend

  const handleSave = async (formData) => {
    // Kirim ke backend
    await fetch('/api/portfolio', {
      method: 'PUT',
      body: formData,
    });
    // Update state lokal (bisa fetch ulang data)
    if (formData.get('image')) {
      const url = URL.createObjectURL(formData.get('image'));
      setImage(url);
    }
    setDescription(formData.get('description'));
    setShowEdit(false);
  };

  return (
    <div>
      {/* ...existing code... */}
      <img src={image} alt="Portfolio" />
      <p>{description}</p>
      <button onClick={() => setShowEdit(true)}>Edit</button>
      {showEdit && (
        <EditPortfolio
          currentImage={image}
          currentDescription={description}
          onSave={handleSave}
        />
      )}
      {/* ...existing code... */}
    </div>
  );
};

export default PortfolioPage;