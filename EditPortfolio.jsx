import React, { useState } from 'react';

const EditPortfolio = ({ currentImage, currentDescription, onSave }) => {
  const [image, setImage] = useState(null);
  const [description, setDescription] = useState(currentDescription || '');

  const handleImageChange = (e) => {
    setImage(e.target.files[0]);
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    const formData = new FormData();
    if (image) formData.append('image', image);
    formData.append('description', description);
    onSave(formData);
  };

  return (
    <form onSubmit={handleSubmit}>
      <div>
        <label>Image:</label>
        <input type="file" accept="image/*" onChange={handleImageChange} />
        {currentImage && <img src={currentImage} alt="Current" width={100} />}
      </div>
      <div>
        <label>Description:</label>
        <textarea value={description} onChange={e => setDescription(e.target.value)} />
      </div>
      <button type="submit">Save</button>
    </form>
  );
};

export default EditPortfolio;
