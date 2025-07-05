export default function Signature(props) {
    const mergedProps = {
        ...Signature.defaultProps,
        ...props
    };
    return <>
        <img style={{ marginTop: "-10%" }} src={mergedProps.image} width="120" alt="Signature" />
    </>
}
Signature.defaultProps = {
    image: 'img/signatureHadjSassi.png',
};