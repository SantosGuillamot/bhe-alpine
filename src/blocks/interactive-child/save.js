const Save = ({ blockProps }) => {
    return (
        <div {...blockProps} x-data>
            <p>Alpine Context - "counter": <span x-text="count"></span></p>
        </div>
    );
};

export default Save;